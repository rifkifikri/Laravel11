<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    // Model ini digunakan untuk jika nama model berbeda dengan tabel database
    protected $table = 'posts';
    
    protected $fillable = [
        'slug',
        'title',
        'author',
        'body'
    ];
}
