<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function  all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        //* Fungsi Callback
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        //* Arrow Function
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post || !is_array($post)) { //* tambahan sendiri => !is_array($post)
            abort(404);
        }

        return $post;
    }
}
