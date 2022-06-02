<?php

namespace App\Http\Controllers;

use auth;
use App\Models\like;
use App\Models\User;
use App\Models\Topmodel;
use App\Models\albummodel;
use App\Models\Photo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {  
        $albums = Topmodel::withCount('likes')
                            // ->where('sexe','homme')
                            ->orderBy('likes_count', 'desc')->get();
                            
        $photo = albummodel::with('topmodel')->get('photo');
        $videos = Topmodel::select('video')->get();
        // $paginations= 
        // dd($videos);

        return view('album', compact('albums','photo','videos'));

        //  $users = User::find(4);
        // $users = User::with('topmodel')->get();

    // foreach ($users->flatMap->topmodels as $topmodel) {
    //     return $topmodel->subscription;
    // }
        // $users = User::with('topmodels')->get();
        // return view('cat', compact('top_models'));
        // return view('album',compact('users'));
        // return $users->topmodels;
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
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {  
        // $cat_albums = albummodel::find($id);
        $albums = Topmodel::find($id);
        // dd($albums->image);

        // $album = albummodel::with('topmodel')->select('photo')->where('topmodel_id','=', $id);
        // dd($album->get('photo'));

        $albummodels = Arr::pluck( albummodel::select('photo')->where('topmodel_id','=', $id)->get('photo'), 'photo');
        // foreach ($albummodels as $key => $albummodel) {
            // dd($key+1);
        // }
        $like = Topmodel::withCount('likes')->orderBy('likes_count', 'desc')->get();
                            
        // dd($like->count());
        // dd(count( $albummodels));
        // $albummodels = albummodel::find($id )
        // dd($albums->albummodel);
        // dd($albummodels);
        return view('showalbum', compact('albums','albummodels') );
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
    public function like() : jsonResponse
    {
        $album = Topmodel::find(request()->id);
        if ($album->isLikedByLoggedInUser()) {
            $res = like::where([
                'user_id' => auth()->user()->id,
                'topmdel_id' => request()->id
            ])->delete();

            if ($res)   {
                return  response()->json([
                    'count' => Topmodel::find(request()->id)->likes->count()

                ]);
            }


        } else {
           $like = new like();

            
            $like->user_id = auth()->user()->id;
            $like->topmodel_id = request()->id;
            $like->save();

            return  response()->json([
                'count' => Topmodel::find(request()->id)->likes->count()

            ]);
        }
        
    }

    public function photo( Request $request)
    {
        $image_get = $request->multimage;
        foreach ($image_get as $image) {
            $rand = mt_rand(1, 9999);
            $fileOriginalName = $image->getClientOriginalExtension();
            $fileNewName = time().$rand.'.'. $fileOriginalName;
            $image->storeAs('images', $fileNewName, 'public'); //here images is folder, $fileNewName is files new name, public indicated public folder. that means folder this image in public/storage/images folder
            albummodel::create([
                'topmodel_id' => $request->idtopmodel,
                // 'album' => $request->album,
                'photo' => $fileNewName,
                // 'video' => $video,
                'created_at' => now(),

            ]);
        }
    }
public function femme_enfant()
{
     $albums = Topmodel::withCount('likes')
                            ->where('style','enfants')
                            ->where('sexe','femme')
                            ->orderBy('likes_count', 'desc')->get();
        $photo = albummodel::with('topmodel')->get('photo');
        // $paginations= 
        // dd($photo);
        if ($albums->isEmpty()) {
            return  view('404');
        } else {
            return view('album', compact('albums','photo'));
        }   
} 
public function femme_ado()
{
     $albums = Topmodel::withCount('likes')
                            ->where('style','ado')
                            ->where('sexe','femme')
                            ->orderBy('likes_count', 'desc')->get();
        $photo = albummodel::with('topmodel')->get('photo');
        // $paginations= 
        // dd($photo);
        if ($albums->isEmpty()) {
            return  view('404');
        } else {
            return view('album', compact('albums','photo'));
        }   
} 
public function femme_jeune()
{
     $albums = Topmodel::withCount('likes')
                            ->where('style','jeune')
                            ->where('sexe','femme')
                            ->orderBy('likes_count', 'desc')->get();
        $photo = albummodel::with('topmodel')->get('photo');
        // $paginations= 
        // dd($photo);
        if ($albums->isEmpty()) {
            return  view('404');
        } else {
            return view('album', compact('albums','photo'));
        }   
} 
public function femme_mature()

{
    
     $albums = Topmodel::withCount('likes')
                            ->where('style','mature')
                            ->where('sexe','femme')
                            ->orderBy('likes_count', 'desc')->get();
                            // dd($albums);
        $photo = albummodel::with('topmodel')->get('photo');
        // $paginations= 
        // dd($photo);
        if ($albums->isEmpty()) {
            return  view('404');
        } else {
            return view('album', compact('albums','photo'));
        }   
} 
public function homme_enfant()
{
     $albums = Topmodel::withCount('likes')
                            ->where('style','enfants')
                            ->where('sexe','homme')
                            ->orderBy('likes_count', 'desc')->get();
        $photo = albummodel::with('topmodel')->get('photo');
        // $paginations= 
        // dd($photo);
        if ($albums->isEmpty()) {
            return  view('404');
        } else {
            return view('album', compact('albums','photo'));
        }   
} 
public function homme_ado()
{
     $albums = Topmodel::withCount('likes')
                            ->where('style','ado')
                            ->where('sexe','homme')
                            ->orderBy('likes_count', 'desc')->get();
        $photo = albummodel::with('topmodel')->get('photo');
        // $paginations= 
        // $retVal = ($albums->isEmpty()) ? 'a' : 'b' ;
        // dd($retVal);
        // dd($photo);
        if ($albums->isEmpty()) {
            return  view('404');
        } else {
            return view('album', compact('albums','photo'));
        }   
} 
public function homme_jeune()
{
    $albums = Topmodel::withCount('likes')
                            ->where('style','jeune')
                            ->where('sexe','homme')
                            ->orderBy('likes_count', 'desc')->get();
        $photo = albummodel::with('topmodel')->get('photo');
        // dd($albums->isEmpty());
    if ($albums->isEmpty()) {
        return  view('404');
    } else {
        return view('album', compact('albums','photo'));
    }    
} 
public function homme_mature()
{
     $albums = Topmodel::withCount('likes')
                            ->where('style','mature')
                            ->where('sexe','homme')
                            ->orderBy('likes_count', 'desc')->get();
                            // dd($albums);
        $photo = albummodel::with('topmodel')->get('photo');
        // $paginations= 
        // dd($photo);
        if ($albums->isEmpty()) {
            return  view('404');
        } else {
            return view('album', compact('albums','photo'));
        }   
} 
public function search()
{
    $search_text = $_GET['search'];
    $albums = Topmodel::withCount('likes')
                            ->where('prenom','LIKE','%'.$search_text.'%')
                            // ->where('sexe','homme')
                            ->orderBy('likes_count', 'desc')->get();
                            // dd($albums);
        $photo = albummodel::with('topmodel')->get('photo');

        if ($albums->isEmpty()) {
            return  view('404');
        } else {
            return view('album', compact('albums','photo'));
        }   
}
}
