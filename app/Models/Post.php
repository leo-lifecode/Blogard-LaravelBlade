<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function getAll()
    {
        return
            [
                [
                    'slug' => "hello-world",
                    'title' => 'hello world',
                    'image' => 'https://cdn-icons-png.flaticon.com/512/149/149071.png',
                    'content' => 'hello world content',
                ],
                [
                    'slug' => "hello-world-2",
                    'title' => 'hello world 2',
                    'image' => 'https://cdn-icons-png.flaticon.com/512/149/149071.png',
                    'content' => 'hello world content 2',
                ],
                [
                    'slug' => "hello-world-3",
                    'title' => 'hello world 3',
                    'image' => 'https://cdn-icons-png.flaticon.com/512/149/149071.png',
                    'content' => 'hello world content 3',
                ],
                [
                    'slug' => "hello-world-4",
                    'title' => 'hello world 4',
                    'image' => 'https://cdn-icons-png.flaticon.com/512/149/149071.png',
                    'content' => 'hello world content 4',
                ],
                [
                    'slug' => "hello-world-5",
                    'title' => 'hello world 5',
                    'image' => 'https://cdn-icons-png.flaticon.com/512/149/149071.png',
                    'content' => 'hello world content 5',
                ],
            ];
    }

    public static function getOneData($slug){
        $data = self::getAll();
        return Arr::first($data, fn($post) => ($post['slug'] == $slug));
    }
}
