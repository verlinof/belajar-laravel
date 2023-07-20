<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Fillable digunakan untuk mengatur data apa saja yang dapat diisi jika kita menggunakan method Create()
    // protected $fillable = ['title','slug','excerpt','body'];
    // Berkebalikan dengan FIllable, guarded adalah kolom yang tidak dapat kita isi ketika menggunakan method Create()
    protected $guarded = ['id'];
}