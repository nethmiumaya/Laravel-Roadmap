<?php
use App\Models\Post;

Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
});