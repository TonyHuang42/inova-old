<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        News::create([
            'title' => 'First News Article',
            'content' => 'This is the content of the first news article...',
            'slug' => 'first-news-article'
        ]);

        News::create([
            'title' => 'Second News Article',
            'content' => 'This is the content of the second news article...',
            'slug' => 'second-news-article'
        ]);
    }
}
