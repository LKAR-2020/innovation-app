<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\telechargement;

class TelechargementController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_telechargement = $request->id_tele;
        // dd($id_telechargement);
       telechargement::create([
            'magazine_id' => $id_telechargement,
            'number' => '1',
            'created_at'=> now(),
       ]);
       return redirect('magazine')->with('success', 'enregistrement effectuer');
    }
}
