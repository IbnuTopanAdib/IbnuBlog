<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        $posts = Post::latest();
     
        // if ( request('search')){
        //     $posts->where('title','like','%'.request('search').'%')->orWhere('body','like','%'.request('search').'%');
        // }
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in ' . $category->nama;
        }
        if(request('user')){
            $user = User::firstWhere('username',request('user'));
            $title = ' by ' . $user->name;
        }
        return view('blog',[
            "title" => "All post" . $title,
            "posts" => Post::latest()->filter(request(['search','category','user']))->paginate(10)->withQueryString()
        ]);
    }


    public function show(Post $posts){
        
            return view('post',[
                "title" => "Singlepost",
                "post" => $posts
            ]);
        
    }
}
