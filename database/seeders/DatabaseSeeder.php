<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fb_categories')->truncate();
        $this->call(CategorySeeder::class);
        DB::table('fb_posts')->truncate();
        $this->call(PostSeeder::class);
        DB::table('fb_comments')->truncate();
        $this->call(CommentSeeder::class);
    }
}
