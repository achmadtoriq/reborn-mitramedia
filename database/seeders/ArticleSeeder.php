<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat beberapa artikel
        $articles = Article::factory(10)->create();

        // Menambahkan tag ke setiap artikel
        $tags = Tag::all();

        foreach ($articles as $article) {
            // Hubungkan artikel dengan beberapa tag secara acak
            $article->tags()->attach($tags->random(rand(1, 3))->pluck('id'));
        }
    }
}
