<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'My First Post',
                'content' => 'This is the content of my first post.',
                'author' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Another Post',
                'content' => 'This is the content of another post.',
                'author' => 'Jane Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}

