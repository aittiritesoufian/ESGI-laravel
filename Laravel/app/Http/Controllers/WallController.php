<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WallController extends Controller
{
    public function show($search = "")
    {
    	$posts = Post::whereRaw('content like ?', ['%'.$search.'%'])->get();
    	
    	return view('show', ['search' => $search, "posts" => $posts]);
    }

    public function write(Request $request)
    {
    	$post = new Post;

    	$post->content = $request->post_content;
    	$post->author = \Auth::id();

    	$post->save();

    	\Session::flash('flash_message','Commentaire ajouté au wall !'); //<--FLASH MESSAGE

    	return redirect('wall');
    }
}
