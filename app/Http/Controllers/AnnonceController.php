<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $annonces =annonce::all();
        // dd($annonces);
       return view('annonce', compact('annonces')) ;
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
        
        // annonce for category
        // $photo_get = $request->file('image_annonce');
        // dd($photo_get);
        // // // $userName = $request->name;
        // // $rand = mt_rand(1,9999);
        // // $origineFileName = $photo_get->getClientOriginalExtension();
        // // $newName = time().$rand.'.'.$origineFileName;
        // $name = $request->image_annonce;
        // $photo_get->storeAs('annonces',$name, 'public');

        // $T_annonce = annonce::create([
            	
        //     // 'category_id' => $request->category_id,
        //     'name' => $request->annonce_name,
        //     'content'=> $request->annonce,
        //     'image' => $request->image_annonce ,
        //     'created_at'=>now()	,
        // ]) ;
        // event(new Registered($T_annonce));
       
        // return redirect('admin/admin')->with('success', "votre annonce a ete bien poster");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonces =annonce::find($id);
        // dd($annonces);
       return view('showannonce', compact('annonces')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
