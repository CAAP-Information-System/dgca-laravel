<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate dummy data for the news table
        for ($i = 1; $i <= 10; $i++) {
            DB::table('news')->insert([
                'news_title' => 'News Title ' . $i,
                'news_description' => 'Description of News ' . $i,
                'news_image' => 'image_' . $i . '.jpg',
                'date_uploaded' => now(),
                'caption' => 'Caption for News ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
