<?php

namespace App\Http\Controllers;

use App\Models\albummodel;
use App\Models\annonce;
use App\Models\banner;
use App\Models\slide;
use App\Models\Topmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class acceuilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // $jointure_video = DB::table('topmodels')
            // ->join('albummodels', 'topmodels.id', '=', 'albummodels.topmodel_id')
            // ->join('types', 'topmodels.id', '=', 'types.topmodel_id')
            // ->select('topmodels.*', 'albummodels.video', 'types.name')
            // ->get();
            // $albummodels=albummodel::all();
            $albums = Topmodel::withCount('likes')->orderBy('likes_count', 'desc')->get();// trie  mieux vote
            // $photos = albummodel::with('topmodels')->get('photo'); //
            $newprofiles = Topmodel::select('created_at','name','image','video','id')->orderBy('created_at', 'desc')->get(10);
            $slides =slide::all();
            $sliders=slide::all()->first();
            // dd($sliders);
            $banners =banner::all();
            $annonces = annonce::all()->take(-5);
            // dd($annonces);
            // $annonces = annonce::orderBy('id', 'desc')->take(5);
            // dd($annonces->get('name'));
            // dd($newprofiles->get());
            // foreach ($albummodels as $albummodel ) {
            //     // dd($albummodel->topmodel);
            //     dd($albummodel->get(['photo', 'created_at']));
            // }
            // dd($topmodels->albummodel->photo);
      return view('acceuil',compact('albums','newprofiles','slides','banners','annonces','sliders' ));
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
        //
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            
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
