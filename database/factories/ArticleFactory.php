<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Article::class;
    
    public function definition(): array
    {
        $title = $this->faker->sentence; // Menghasilkan judul artikel

        return [
            'title' => $title,                      // Menghasilkan judul artikel
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph,   // Menghasilkan konten artikel
            'content_detail' => $this->faker->paragraph,   // Menghasilkan konten artikel
        ];
    }
}
