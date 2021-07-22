<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post){
<<<<<<< HEAD
        return view('index')->with(['posts' => $post->get()]);  
=======
        return $post->get();
>>>>>>> e9d9d20a36b13965e7ec7bc9774c6bb309a515c8
    }
}
