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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return view('home',[
        "title"=>"Home"
    ]);
});
Route::get('about', function () {
    return view('about',[
        "title"=>"About",
        "nama"=>"Kirara Bernstein",
        "email"=>"Kirara@gmail.com",
        "gambar"=>"kirara.jpg"
    ]);   
});


Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{post:slug}',[PostController::class, 'show']);

Route::get('/categories',[CategoryController::class, 'index']);

Route::get('/login',[LoginController::class, 'index']);
Route::get('/login/auth',[LoginController::class, 'authenticate']);

Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);