<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::create([
            'title' => 'Step-by-step guide to choosing great font pairs',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'excerpt' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'image' => '/images/sample1.jpg',
            'author' => 'John Doe',
            'category' => 'Startup',
            'published_date' => now(),
        ]);

        Blog::create([
            'title' => 'Design tips for designers that cover everything you need',
            'content' => 'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.',
            'excerpt' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.',
            'image' => '/images/sample2.jpg',
            'author' => 'Jane Doe',
            'category' => 'Business',
            'published_date' => now(),
        ]);
    }
}
