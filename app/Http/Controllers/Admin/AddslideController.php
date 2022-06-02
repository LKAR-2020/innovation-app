<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Models\slide;
use Illuminate\Http\Request;

class AddslideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $banners = banner::all();
        $slides = slide::all();
        return view('admin.admin.addbannerslide',compact('slides','banners'));
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
        $photo_get = $request->images_slide;
        // dd($photo_get->getClientOriginalExtension());
        // $userName = $request->name;


        foreach ($photo_get as $photo) {
           
            $rand = mt_rand(1,9999);
            $origineFileName = $photo->getClientOriginalExtension();
            $slidernewName = time().$rand.'.'.$origineFileName;
            $photo->storeAs('sliders',$slidernewName, 'public');
            slide::create([
                
                
                'name' => $request->slide,
                'content' => $request->content,
                'url' => $request->link,
                'image' => $slidernewName,
                // 'file' => $newNameFichier,
                'created_at' => now(),
                
            ]);
        }
        // event(new Registered($sliders));
        session()->flash('message', "slide ajouter avec success");
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
        $editslides = slide::find($id);
        return view('admin.admin.editslide',compact('editslides'));
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
        $slides = slide::find($id);
        $slides->name = $request->name;
        // dd($slides->name);
        $slides->content = $request->contenu;
        $slides->url = $request->link;

        // dd($slides->content);

        if ($request->hasfile('image')) 
        {
           $path_image = 'storage/sliders/'.$slides->image;
           if (file_exists($path_image)) 
           {
               unlink($path_image);
           } 
           $slide_get = $request->image;
           // dd($slide_get->getClientOriginalExtension());
           // $userName = $request->name;
           $rand = mt_rand(1,9999);
           $origineFileName = $slide_get->getClientOriginalExtension();
           $slidenewName = time().$rand.'.'.$origineFileName;
           $slide_get->storeAs('sliders',$slidenewName, 'public');
           $slides->image = $slidenewName;
        } 
            $slides->update();


            return redirect('admin/admin/addslide')->with('success', 'mise a jours effectuer');
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
