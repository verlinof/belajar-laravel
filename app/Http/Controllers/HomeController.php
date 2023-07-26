<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home', [
            "title" => "home",
            "name" => "Verlino Raya Fajri",
            "email" => "verlinorayafajri@mail.ugm.ac.id"
            ]
        );
    }
}