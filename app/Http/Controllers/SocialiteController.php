<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    protected $providers = [ "google", "github", "facebook" ];

    # La vue pour les liens vers les providers
    public function loginRegister () {
    	return view("welcome");
    }

    # redirection vers le provider
    public function redirect (Request $request) {

        $provider = $request->provider;

        // On vérifie si le provider est autorisé
        if (in_array($provider, $this->providers)) {
            return Socialite::driver($provider)->redirect(); // On redirige vers le provider
        }
        abort(404); // Si le provider n'est pas autorisé
    }

    // Callback du provider
    public function callback (Request $request) {

        $provider = $request->provider;

        if (in_array($provider, $this->providers)) {

        	// Les informations provenant du provider
        	$data = Socialite::driver($request->provider)->stateless()->user();

            // Les informations de l'utilisateur
            $user = $data->user;

            // voir les informations de l'utilisateur
            // dd($user);

            // token
            $token = $data->token;
                        // facebook
            //             "name" => "Alexis Richmond"
            //   "email" => "loukoukonan@live.fr"
            //   "id" => "4369543656416198"
                //google
                //"given_name" => "alexis"
//              "family_name" => "richmond"
//              "picture" => "https://lh3.googleusercontent.com/a/AATXAJygJPfBIzlsBVXL6Tm6CJQrhuHRoOJHQ-vCdwKN=s96-c"
//              "email" => "alexisrichmond7@gmail.com"

            // Les informations de l'utilisateur
            $id = $data->getId();
            $name = $data->getname();
            $nickname = $data->getNickname();
            // dd($nickname);
            $email = $data->getEmail();
            $avatar = $data->getAvatar();
            // dd($email);
             # 1. On récupère l'utilisateur à partir de l'adresse email
             $user = User::where("email", $email)->first();

             # 2. Si l'utilisateur existe
             if (isset($user)) {
 
                 // Mise à jour des informations de l'utilisateur
                 $user->name = $name;
                 $user->save();
 
             # 3. Si l'utilisateur n'existe pas, on l'enregistre
             } else {
                 
                 // Enregistrement de l'utilisateur
                 $user = User::create([
                    'socialite_id' => $id,
                     'name' => $name,
                     'email' => $email,
                     'prenom' => $name,
                     'socialite_id' => $id,
                     'avatar_url' => $avatar,
                     'contact' => '0101010101',
                     'date' => now(),
                     'created_at'=> now(),
                     'password' => Hash::make('password') // On attribue un mot de passe
                 ]);
             }
 
             # 4. On connecte l'utilisateur
             auth()->login($user);
 
             # 5. On redirige l'utilisateur vers /home
             if (auth()->check()) return redirect(route('acceuil.index'));
 
          
         }
         abort(404);
    }
}
