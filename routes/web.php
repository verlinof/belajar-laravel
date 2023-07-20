<?php

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


//get = maksudnya diambil dari url
// '/' maksudnya root
Route::get('/', function () {
    return view('home', [
        "title" => "home",
        "name" => "Verlino Raya Fajri",
        "email" => "verlinorayafajri@mail.ugm.ac.id"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Verlino Raya Fajri",
        "email" => "verlinorayafajri@mail.ugm.ac.id"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

//{slug} adalah url yang dijadikan menjadi sebuah variabel, sehingga kita dapat memanggilnya kedalam function kita
Route::get('blog/{post:slug}', [PostController::class, 'show']);