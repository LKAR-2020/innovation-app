<?php

namespace App\Http\Controllers\Admin;

use App\Models\banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\slide;
use Illuminate\Auth\Events\Registered;

class AddbannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $banners = banner::all();
        $slides =slide::all();
        return view('admin.admin.addbannerslide', compact('banners','slides'));
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
        
        $photo_get = $request->images_banner;
        // dd($photo_get->getClientOriginalExtension());
        // $userName = $request->name;


        foreach ($photo_get as $photo) {
           
            $rand = mt_rand(1,9999);
            $origineFileName = $photo->getClientOriginalExtension();
            $bannernewName = time().$rand.'.'.$origineFileName;
            $photo->storeAs('banners',$bannernewName, 'public');
            banner::create([
                
                
                // 'name' => $request->slide,
                'content' => $request->banner,
                'image' => $bannernewName,
                // 'file' => $newNameFichier,
                'created_at' => now(),
                
            ]);
        }
        // event(new Registered($banners));

        session()->flash('message', "banner ajouter avec success");
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
        $editbanners = banner::find($id);
        return view('admin.admin.editbanner',compact('editbanners'));
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
        $banners = banner::find($id);
        // $banners->name = $request->titre;
        $banners->content = $request->content;
        // dd($banners->content);

        if ($request->hasfile('image')) 
        {
           $path_image = 'storage/banners/'.$banners->image;
           if (file_exists($path_image)) 
           {
               unlink($path_image);
           } 
           $banner_get = $request->image;
           // dd($banner_get->getClientOriginalExtension());
           // $userName = $request->name;
           $rand = mt_rand(1,9999);
           $origineFileName = $banner_get->getClientOriginalExtension();
           $bannernewName = time().$rand.'.'.$origineFileName;
           $banner_get->storeAs('banners',$bannernewName, 'public');
           $banners->image = $bannernewName;
        } 
            $banners->update();


            return redirect('admin/admin/addbanner')->with('success', 'enregistrement effectuer');     

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
