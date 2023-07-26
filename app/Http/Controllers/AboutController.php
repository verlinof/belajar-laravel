<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about', [
            "title" => "about",
            "name" => "Verlino Raya Fajri",
            "email" => "verlinorayafajri@mail.ugm.ac.id"
        ]);
    }
}