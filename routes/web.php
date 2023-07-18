<?php

use Illuminate\Support\Facades\Route;

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
        "name" => "Verlino Raya Fajri",
        "email" => "verlinorayafajri@mail.ugm.ac.id"
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});