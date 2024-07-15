<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
   
    // public static function find ($id):array {
        
    //     // Cara ini dengan yang bawah merupakan sama saja untuk melihat slug yang sama
    //     // $post Arr::first(static::all(), function ($post) use ($slug){
    //     //     return $post['slug'] == $slug;
    //     // });


    //     $post = Arr::first(static::all(), fn($post) => $post['id'] == $id);
    //     if(! $post){
    //         // Fungsi di laravel untuk menangani error pesan
    //         abort(404);
    //     }else{
    //         return $post; 
    //     }

    // }
    protected $fillable = [
        'slug',
        'title',
        'author',
        'body'
    ];

}