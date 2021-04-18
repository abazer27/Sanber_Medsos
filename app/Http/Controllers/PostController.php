<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use app\article;
use app\comment;
use DB;
class PostController extends Controller
{
    public function create(){
        return view('home');
    }

    public function store(Request $request){

        // $this->validate($request,[
    	// 	'blog' => 'required',
    	// 	'image' => 'required',
        //     'like' => 'required'
    	// ]);
 
        // Article::create([
    	// 	'blog' => $request->title,
    	// 	'image' => $request->image,
        //     'like' => $request->like
    	// ]);
        $request->validate([
            'blog' => 'required',
            'image' => 'required',
            'like' => 'required'
        ]);

        $article = new Article;
        $article->blog  = $request["blog"];
        $article->image = $request['image'];
        $article->like = $request['like'];
        $article->save();

        return redirect('/home')->with('success', 'Post anda telah tersimpan!');

    }
    public function index(){
        $article = article::all();
        return view('/home',compact('article'));
    }
    public function show($id){
        $article = article::find($id);
        return view('articles.show', compact ('article'));
    }
    public function edit($id){
       $article = article::find($id);
    return view('articles.edit', compact('article'));
    }
    public function destroy($id){
        $article = article::destroy($id);
        return redirect('/home')->with('success', 'Post Berhasil Dihapus');
    }
    public function update($id, Request $request){

        $request->validate([
            'blog' => 'required',
            'image' => 'required',
            'like' => 'required'
        ]);

        $article = article::where('id' , $id)->update([
        'blog'  => $request["blog"],
        'image' => $request['image'],
        'like' => $request['like'],
        ]);
        return redirect('/home');
=======
use App\Models;

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
        //$post = Post::all();

        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'post'              =>  'required',
        //     'post_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:5000'
        // ]);

        // $post = new Post;
        // $post->post = $request->post;

        //  // Check if a profile image has been uploaded
        //  if ($request->has('post_image')) {
        //     // Get image file
        //     $image = $request->file('post_image');
        //     // Make a image name based on user name and current timestamp
        //     $name = Str::slug($request->input('name')).'_'.time();
        //     // Define folder path
        //     $folder = '/uploads/images/';
        //     // Make a file path where image will be stored [ folder path + file name + file extension]
        //     $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        //     // Upload image
        //     $this->uploadOne($image, $folder, 'public', $name);
        //     // Set user profile image path in database to filePath
        //     $user->post_image = $filePath;
        // }
        // // Persist user record to database
        // $post->save();
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
        
>>>>>>> daniel
    }
}
