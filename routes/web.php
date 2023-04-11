<?php

// konek ke models
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//1. Kalau misal ada rute yg metode requestnya get (ketika akses url browser ) yg alamatnya adalah / "slash" maka dia akan menjalankan fungsi berikut yakni :welcome
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// 1.
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Septian Bekti Purwandi",
        "email" => "septianbekti99@gmail.com",
        "image" => "septian.jpg"
    ]);
});


// 1.
Route::get('/blog', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{slug}', [PostController::class, 'show']);
