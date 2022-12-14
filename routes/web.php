<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;


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
    return view('categories',[
        'title' => 'All Categories',
        'categories' => Category::all()

    ]);
});

Route::get('/login',[LoginController::class, 'index']);
Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);