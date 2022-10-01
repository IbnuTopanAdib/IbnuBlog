<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "home"
    ]);
});

Route::get('/about',[PostController::class,'about'] );

Route::get('/blog', [PostController::class,'index']);

Route::get('/blog/{posts:slug}',[PostController::class,'show'] );

Route::get('/categories/{category:slug}', [CategoryController::class,'index']);

Route::get('/categories', function(){
    return view('blog',[
        'title' => 'categories',
        'categories' => Category::all()

    ]);
});

Route::get('/author/{user:username}', function(User $user){
    return view('blog',[
        'title' => 'authors',
        'posts' => $user->posts

    ]);
});