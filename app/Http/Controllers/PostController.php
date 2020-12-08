<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class PostController extends Controller
{

 
public function show()
{
    $posts=App\Post::all();

    return view('blog', compact('posts' )); 


}


public function review($id)
{
    $post=App\Post::find($id);
    
    return view('review', compact('post' )); 


}






}
