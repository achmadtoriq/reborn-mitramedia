<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(MitraMenusSeeder::class);
        // $this->call(MetaDescriptionSeeder::class);
        // $this->call(LayananSeeder::class);
        // $this->call(ProdukSeeder::class);
        // $this->call(PartnerSeeder::class);
        $this->call([
            TagSeeder::class,
            ArticleSeeder::class,
        ]);

    }
}
