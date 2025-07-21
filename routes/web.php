<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Awi']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Munawir Djamaluddin',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero quo animi reiciendis odit perspiciatis ullam unde repudiandae, tempora inventore ipsam blanditiis modi optio nesciunt temporibus architecto doloremque, rerum eveniet veniam.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Munawir Djamaluddin',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolores quo blanditiis ratione itaque! Id dicta dolorum incidunt nesciunt consectetur ducimus sed qui vel? Molestiae fugiat repudiandae accusamus quia porro.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Munawir Djamaluddin',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero quo animi reiciendis odit perspiciatis ullam unde repudiandae, tempora inventore ipsam blanditiis modi optio nesciunt temporibus architecto doloremque, rerum eveniet veniam.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Munawir Djamaluddin',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolores quo blanditiis ratione itaque! Id dicta dolorum incidunt nesciunt consectetur ducimus sed qui vel? Molestiae fugiat repudiandae accusamus quia porro.'
        ]
    ];

    $posts = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => $posts['title'], 'post' => $posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
