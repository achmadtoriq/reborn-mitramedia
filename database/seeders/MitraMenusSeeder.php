<?php

namespace Database\Seeders;

use App\Models\mitra_menus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MitraMenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            ['name' => 'Home', 'classname' => 'App\Livewire\Pages\Home', 'url' => '/', 'order' => 1, 'is_active' => true],
            ['name' => 'About', 'classname' => 'App\Livewire\Pages\About', 'url' => '/about', 'order' => 2, 'is_active' => true],
            ['name' => 'Artikel', 'classname' => 'App\Livewire\Pages\Artikel', 'url' => '/artikel', 'order' => 3, 'is_active' => true],
            ['name' => 'Socmed', 'classname' => 'App\Livewire\Pages\Socmed', 'url' => '/sosial-media', 'order' => 4, 'is_active' => true],
            ['name' => 'Project', 'classname' => 'App\Livewire\Pages\Project', 'url' => '/project', 'order' => 5, 'is_active' => true],
            ['name' => 'Contact Us', 'classname' => 'App\Livewire\Pages\Contact', 'url' => '/contact', 'order' => 6, 'is_active' => true],
        ];

        foreach ($menus as $menu) {
            mitra_menus::create($menu);
        }
    }
}
