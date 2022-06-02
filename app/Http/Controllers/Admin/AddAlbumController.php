<?php

namespace App\Http\Controllers\Admin;

use App\Models\Topmodel;
use App\Models\albummodel;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $topmodels = Topmodel::all();
        $albums = albummodel::select('id');

        // dd($albums->get());

        return view('admin.admin.addalbum', compact('topmodels','albums'));
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

        $id_topmodel= $request->idtopmodel;
        // dd($id_topmodel);
        $image_get = $request->multimage;
        // dd($image_get);
        foreach ($image_get as $image) {
            $rand = mt_rand(1, 9999);
            $fileOriginalName = $image->getClientOriginalExtension();
            $fileNewName = time().$rand.'.'. $fileOriginalName;
            // dd($image);
            $image->storeAs('images', $fileNewName, 'public'); //here images is folder, $fileNewName is files new name, public indicated public folder. that means folder this image in public/storage/images folder
            albummodel::create([
                'topmodel_id' => $id_topmodel,
                // 'album' => $request->album,
                'photo' => $fileNewName,

                'created_at' => now(),

            ]);
        }
        session()->flash('message', "album photo ajouter avec success");
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
        $albums = Topmodel::find($id);
        // dd($albums->name);

        $editalbums = Arr::pluck( albummodel::select('photo')->where('topmodel_id','=', $id)->get('photo'), 'photo');
        // $delidalbums = albummodel
        $album = albummodel::select('id');
        // dd($album->get());

        return view('admin.admin.editalbum',compact('editalbums','albums','album'));
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
        $deleteAlbum = albummodel::all();
        // dd($deleteAlbum);
        $deleteAlbum->delete();
        session()->flash('message', "supprimer avec success");
    }
}
