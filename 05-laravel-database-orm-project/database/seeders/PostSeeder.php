<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => 'First Post',
            'content' => 'This is the content of the first post.'
        ]);

        Post::create([
            'title' => 'Second Post',
            'content' => 'Here is some more sample content.'
        ]);
    }
}
