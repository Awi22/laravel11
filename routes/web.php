<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Awi']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {

    $posts = Post::find($slug);

    return view('post', ['title' => "Single Post", 'post' => $posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
