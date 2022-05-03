<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([   
            "image" => null,
            "title" => "Deneme Blog", 
            "description" => "lorem ipsum",
            "read_count" => "1",
            "status" => 0,
            "slug" => 'deneme-blog'
        ]);
    }
}
