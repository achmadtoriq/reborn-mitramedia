<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat beberapa tag
        $tags = ['Laravel', 'PHP', 'JavaScript', 'Vue.js', 'React', 'CSS'];

        foreach ($tags as $tag) {
            Tag::create(['name' => $tag]);
        }
    }
}
