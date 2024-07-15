<?php

use App\Models\Post;
use App\Models\PostModel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title'=>'Home Page','nyut' =>'coba']);
});
Route::get('/posts', function(){
    return view('posts',['title'=>'Blog Pageeee','nyut'=>'ciwii', 'posts'=>Post::all()]);
});

Route::get('posts/{post:slug}', function (Post $post){
    //$post = Post::find($id);
    return view('post',['title'=>'Detail Artikel', 'nyut'=>'', 'posts'=>$post]);
});

Route::get('/contact', function (){
    return view('contact',['title' => 'Contact Page', 'nyut'=> 'ini contact ku']);
});
