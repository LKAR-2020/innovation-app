<?php

namespace App\Http\Controllers\Admin;

use App\Models\magazine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Symfony\Component\HttpFoundation\Session\Session;

class AddmagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin.addmagazine');
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
        // $file_magazine_get = $request->fichier;
        // dd($file_magazine_get->getClientOriginalExtension());
        $magazine_get = $request->image;
        // dd($magazine_get->getClientOriginalExtension());
        // $userName = $request->name;
        $rand = mt_rand(1,9999);
        $origineFileName = $magazine_get->getClientOriginalExtension();
        $magazinenewName = time().$rand.'.'.$origineFileName;
        $magazine_get->storeAs('magazines',$magazinenewName, 'public');
        $file_magazine_get = $request->fichier;
        $FicherNameOrigine = $file_magazine_get->getClientOriginalExtension();
        $newNameFichier = time().$rand.'.'.$FicherNameOrigine;
        $file_magazine_get->storeAs('files',$newNameFichier,'public');

        

        $magazines = magazine::create([
           

            'name' => $request->titre,
            'content' => $request->content,
            'image' => $magazinenewName,
            'file' => $newNameFichier,
            'created_at' => now(),

        ]);

        event(new Registered($magazines));
        session()->flash('message', "magazine ajouter avec success");
        
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
        $magazines = magazine::find($id);
        // dd($magazines);
        $magazines->delete();
        session()->flash('message', "supprimer avec success");
        return redirect('admin/admin')->with('success', 'enregistrement effectuer');
    }
}
