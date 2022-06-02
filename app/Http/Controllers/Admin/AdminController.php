<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\annonce;
use App\Models\magazine;
use App\Models\Topmodel;
use App\Models\albummodel;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use PhpParser\Parser\Multiple;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $users = User::all() ;
        $topmodel = Topmodel::all();
        // $albums = albummodel::select()
        $models= Topmodel::withCount('likes')->paginate($perPage = 4, $columns = ['*'], $pageName = 'topmodel')->fragment('tompodel');

        $annonces=annonce::paginate($perPage = 2, $columns = ['*'], $pageName = 'annonce');

        $magazine = magazine::all();
        // dd($users->count());

        return view('admin.admin.index',compact('users','models','annonces','magazine', 'topmodel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // video
        $video_get = $request->video;
        // $userName = $request->name;
        $rand = mt_rand(1,9999);
        $origineFileNamevideo = $video_get->getClientOriginalExtension();
        $newNamevideo = time().$rand.'.'.$origineFileNamevideo;
        $video_get->storeAs('videos',$newNamevideo, 'public');
        // dd($newNamevideo);
        // images
        $photo_get = $request->image;
        // dd($photo_get->getClientOriginalExtension());
        // $userName = $request->name;
        $rand = mt_rand(1,9999);
        $origineFileName = $photo_get->getClientOriginalExtension();
        $newName = time().$rand.'.'.$origineFileName;
        $photo_get->storeAs('photos',$newName, 'public');

        $topmodel = Topmodel::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'contact' => $request->contact,
            'date'=> $request->date,
            // 'date' => ,
             'sexe' => $request->sexe,
            'style' => $request->style,
            'taille' => $request->taille,
            //'albummodel_id' => rand(1,10),
            'facebook' => $request->facebook,
            "commune"  =>$request->commune,
            "classe" => $request->classe,
            'nationnalite' => $request->nationnalite,
            'teint' => 	$request->teint,
            'poids' => 	$request->poids,
            'video' => $newNamevideo,
            'image' => $newName,
            // 'type_id' => rand(1,9)	,
            'created_at' => now(),
        ]);
        event(new Registered($topmodel));
        // $video = $request->input('video');
        // $OrigineName = $video->getClientOriginalExtension();
        // $newName = time().'.'.$OrigineName;
        // $video->storeAs('videos',$newName, 'public');
        //--------upload video image
            // $rand = mt_rand(1, 9999);
            // $fileOriginalName = $request->image->getClientOriginalExtension();
            // $fileNewName = $request->prenom . time().$rand.'.'. $fileOriginalName;
            // $request->image->storeAs('images', $fileNewName, 'public'); //here images is folder, $fileNewName is files new name, public indicated public folder. that means folder this image in public/storage/images folder
            // albummodel::create([
            //     'topmodel_id' => $request->idtopmodel,
            //     // 'album' => $request->album,
            //     'photo' => $fileNewName,
            //     // 'video' => $video,
            //     'created_at' => now(),]);
        // ----------------Multiple images--------------
        // $image_get = $request->multimage;
        // foreach ($image_get as $image) {
        //     $rand = mt_rand(1, 9999);
        //     $fileOriginalName = $image->getClientOriginalExtension();
        //     $fileNewName = time().$rand.'.'. $fileOriginalName;
        //     $image->storeAs('images', $fileNewName, 'public'); //here images is folder, $fileNewName is files new name, public indicated public folder. that means folder this image in public/storage/images folder
        //     annonce::create([
        //         'topmodel_id' => $request->idtopmodel,
        //         // 'album' => $request->album,
        //         'photo' => $fileNewName,
        //         // 'video' => $video,
        //         'created_at' => now(),

        //     ]);
        // }

        return redirect('admin/admin')->with('success', 'enregistrement effectuer');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $albummodels = Arr::pluck( albummodel::select('photo')->where('topmodel_id','=', $id)->get('photo'), 'photo');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $models = topmodel::find($id);
        dd($models);
        session()->flash('message', "supprimer avec success");
        return redirect('admin/admin')->with('success', 'enregistrement effectuer');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adduser(Request $request)

    {

        return view('admin.admin.adduser');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAnnonce(Request $request)
    {
        $annonce_get = $request->image;
        // dd($annonce_get->getClientOriginalExtension());
        // $userName = $request->name;
        $rand = mt_rand(1,9999);
        $origineFileName = $annonce_get->getClientOriginalExtension();
        $annoncenewName = time().$rand.'.'.$origineFileName;
        $annonce_get->storeAs('annonces',$annoncenewName, 'public');


        $annonces = annonce::create([


            'name' => $request->titre,
            'content' => $request->content,
            'image' => $annoncenewName,
            'created_at' => now(),

        ]);

        event(new Registered($annonces));
        return redirect('admin/admin')->with('success', 'enregistrement effectuer');
    }
    public function addannonce()
    {

        return view('admin.admin.addannonce');

    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storemagazine(Request $request)
    {
        $magazine_get = $request->image;
        // dd($magazine_get->getClientOriginalExtension());
        // $userName = $request->name;
        $rand = mt_rand(1,9999);
        $origineFileName = $magazine_get->getClientOriginalExtension();
        $magazinenewName = time().$rand.'.'.$origineFileName;
        $magazine_get->storeAs('magazines',$magazinenewName, 'public');


        $magazines = magazine::create([


            'name' => $request->titre,
            'content' => $request->content,
            'image' => $magazinenewName,
            'created_at' => now(),

        ]);

        event(new Registered($magazines));

        return redirect('admin/admin')->with('success', 'enregistrement effectuer');
    }
    public function addmagazine()
    {
        return view('admin.admin.addmagazine');
    }

}
