<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\annonce;
use App\Models\magazine;
use App\Models\Topmodel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;

class AddannonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all() ;
        $models= Topmodel::all();
        $annonces=annonce::all();
        $magazine = magazine::all();
        // dd($users->count());

        return view('admin.admin.addannonce',compact('users','models','annonces','magazine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $editannonces = annonce::find($id);
        return view('admin.admin.editannonce',compact('editannonces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $annonces = annonce::find($id);
        $annonces->name = $request->titre;
        $annonces->content = $request->content;

        if ($request->hasfile('image'))
        {
           $path_image = 'storage/annonces/'.$annonces->image;
           if (file_exists($path_image))
           {
               unlink($path_image);
           }
           $annonce_get = $request->image;
           // dd($annonce_get->getClientOriginalExtension());
           // $userName = $request->name;
           $rand = mt_rand(1,9999);
           $origineFileName = $annonce_get->getClientOriginalExtension();
           $annoncenewName = time().$rand.'.'.$origineFileName;
           $annonce_get->storeAs('annonces',$annoncenewName, 'public');
           $annonces->image = $annoncenewName;
        }
            $annonces->update();

            return redirect('admin/admin')->with('success', 'enregistrement effectuer');








        // $annonces->name = $request->titre;
        // $annonces->content = $request->content;
        // $annonces->


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annonces = annonce::find($id);
        // dd($annonces);
        $annonces->delete();
        // ajouter un session flash a  edit annonce
        session()->flash('message', "supprimer avec success");
        return redirect('admin/admin')->with('success', 'enregistrement effectuer');

    }
}
