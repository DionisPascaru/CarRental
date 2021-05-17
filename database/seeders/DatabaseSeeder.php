<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        \App\Models\Category::factory(2)->create();
        \App\Models\Tag::factory(2)->create();
        \App\Models\Article::factory(2)->create();
        \App\Models\Image::factory(2)->create();
        \App\Models\Comment::factory(2)->create();
        \App\Models\Specification::factory(2)->create();
    }
}
