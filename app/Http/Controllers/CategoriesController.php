<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return view('categories', [
            'title' => 'Categories',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category){
        return view('category', [
            'title' => 'Category',
            'category' => $category,
            'posts' => $category->posts 
        ]);
    } 
}