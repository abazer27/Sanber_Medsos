<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    }
}
