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
    public function index(){
        return view('blog',[
            "title" => "blog",
            "posts" => Post::all()
        ]);
    }
    public function show(Post $posts){
        
            return view('post',[
                "title" => "Singlepost",
                "post" => $posts
            ]);
        
    }
}
