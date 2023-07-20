<?php

namespace App\Models;

class Post_Lama
{
    static $blog_post = [
        [
            "title" => "Postingan pertama",
            "slug" => "postingan-pertama",
            "author" => "verlino raya fajri",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolores omnis eos nobis quia aspernatur amet saepe vel nesciunt. Asperiores?",
        ],
        [
            "title" => "Postingan kedua",
            "slug" => "postingan-kedua",
            "author" => "fadil",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolores omnis eos nobis quia aspernatur amet saepe vel nesciunt. Asperiores?lorem ipsum dolor sit amet, tai",
        ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        //static:: digunakan untuk function sedangkan self:: untuk variable static
        $posts = static::all();
        
        //Arti dari kode dibawah ini adalah, karna kita menggunakan array associative maka "slug" === $slug untuk mencari datanya.
        return $posts->firstWhere('slug', $slug);
    }
}