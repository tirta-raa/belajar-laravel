<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// kalau ada route metodenya get yang alamatnya adalah /  maka jalankan fungsi view('welcome')
// view('welcome') didapat dari folder resources/views/welcome.blade.php
Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Fikri',
    ]);
});

Route::get('/blog', function () {
    $blogPost = [
        [
            'title' => 'post pertama',
            'slug' => 'post-pertama',
            'author' => 'Fikri',
           'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dicta itaque sint labore iusto quasi distinctio nulla, mollitia illum, eius voluptatibus neque repellat amet libero quas modi soluta alias incidunt excepturi. Libero obcaecati fugit delectus. Nesciunt iure voluptates, sed distinctio voluptatibus corporis cupiditate nisi eveniet quidem. Totam, illum sequi? Illum molestiae tenetur nihil sit quasi porro rerum optio qui, ipsa commodi minus modi impedit cupiditate vel suscipit sapiente vero? Inventore esse doloremque neque commodi. Culpa porro qui atque sint quas.',
        ],
        [
            'title' => 'post kedua',
            'slug' => 'post-kedua',
            'author' => 'tirta',
           'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dicta itaque sint labore iusto quasi distinctio nulla, mollitia illum, eius voluptatibus neque repellat amet libero quas modi soluta alias incidunt excepturi. Libero obcaecati fugit delectus. Nesciunt iure voluptates, sed distinctio voluptatibus corporis cupiditate nisi eveniet quidem. Totam, illum sequi? Illum molestiae tenetur nihil sit quasi porro rerum optio qui, ipsa commodi minus modi impedit cupiditate vel suscipit sapiente vero? Inventore esse doloremque neque commodi. Culpa porro qui atque sint quas.',
        ],
    ];
    return view('posts', [
        'title' => 'Blog',
        'blogPost' => $blogPost,
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blogPost = [
        [
            'title' => 'post pertama',
            'slug' => 'post-pertama',
            'author' => 'Fikri',
           'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dicta itaque sint labore iusto quasi distinctio nulla, mollitia illum, eius voluptatibus neque repellat amet libero quas modi soluta alias incidunt excepturi. Libero obcaecati fugit delectus. Nesciunt iure voluptates, sed distinctio voluptatibus corporis cupiditate nisi eveniet quidem. Totam, illum sequi? Illum molestiae tenetur nihil sit quasi porro rerum optio qui, ipsa commodi minus modi impedit cupiditate vel suscipit sapiente vero? Inventore esse doloremque neque commodi. Culpa porro qui atque sint quas.',
        ],
        [
            'title' => 'post kedua',
            'slug' => 'post-kedua',
            'author' => 'tirta',
           'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dicta itaque sint labore iusto quasi distinctio nulla, mollitia illum, eius voluptatibus neque repellat amet libero quas modi soluta alias incidunt excepturi. Libero obcaecati fugit delectus. Nesciunt iure voluptates, sed distinctio voluptatibus corporis cupiditate nisi eveniet quidem. Totam, illum sequi? Illum molestiae tenetur nihil sit quasi porro rerum optio qui, ipsa commodi minus modi impedit cupiditate vel suscipit sapiente vero? Inventore esse doloremque neque commodi. Culpa porro qui atque sint quas.',
        ],
    ];

    // arti kode mencari dari blogpost yang slugnya sama dengan blogpost di atas
    $new_post = [];
    foreach ($blogPost as $post ) {
        if ($post['slug'] == $slug) {
            $new_post = $post;
        }
    }

    return view('single-post', [
        'title' => 'Single Post',
        'blogPost' => $new_post,
    ]);
});