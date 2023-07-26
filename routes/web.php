<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoriesController;

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
Route::get('/', [HomeController::class, 'home']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/blog', [PostController::class, 'index']);

// {post:slug} -> ini menggunakan pencarian data dari laravel berdasarkan Objek, akan tetapi :slug adalah yang dimasukkan ke URL website kita.
Route::get('blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoriesController::class, 'show']);