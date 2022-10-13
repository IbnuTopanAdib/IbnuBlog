<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function about(){
        return view('about',
        [
            "title" => "about",
            "name" => "Ibnu Topan",
            "email" => "resyaderesya@gmail.com",
            "image" => "1.jpeg"
        ]
    );
    }
    // public function index(){
    //     return view('blog',[
    //         "title" => "All post",
    //         "posts" => Post::with(['user','category'])->latest()->get()
    //     ]);
    // }
    public function index(){
        return view('blog',[
            "title" => "All post",
            "posts" => Post::latest()->get()
        ]);
    }
    public function show(Post $posts){
        
            return view('post',[
                "title" => "Singlepost",
                "post" => $posts
            ]);
        
    }
}
