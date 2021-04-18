<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('home', compact('post'));
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
        $this->validate($request, [
            'post' => 'nullable',
            'post_image' => 'image|nullable|mimes:png,jpg,jpeg'
        ]);
        
        // if($request->hasFile('post_image')){
        //     $image = $request->post_image;
        //     $name_img = time().'-'.$image->getClientOriginalName();
        // } else {
        //     $name_img = "";
        // }

        if ($request->hasFile('post_image')) {
            $filenameWithExt = $request->file('post_image')->getClientOriginalName ();
            // // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // // Get just Extension
            $extension = $request->file('post_image')->getClientOriginalExtension();
            // // Filename To store
            $fileNameToStore = $filename. '_'. time().'.'.$extension;
            $path = $request->file('post_image')->storeAs('public\img', $fileNameToStore);
            // $fileNameToStore->store('img', $name_img);
            // }
            // Else add a dummy image
            } else {
            $fileNameToStore = NULL;
            }
            
        // $user = Auth::user();

        Post::create([
            'post' => $request->post,
            'image' => $fileNameToStore,
            'user_id' => Auth::id()
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('profile.profile', compact('user'));
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