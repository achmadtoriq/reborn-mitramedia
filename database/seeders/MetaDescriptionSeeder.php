<?php

namespace Database\Seeders;

use App\Models\MetaDescription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetaDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            ['routename' => 'home', 'meta_desc' => 'Meta Desc Home Page', 'meta_title' => 'Meta Title Home Page', 'title' => 'Title Home Page'],
            ['routename' => 'about', 'meta_desc' => 'Meta Desc About Page', 'meta_title' => 'Meta Title About Page', 'title' => 'Title About Page'],
            ['routename' => 'artikel', 'meta_desc' => 'Meta Desc Artikel Page', 'meta_title' => 'Meta Title Artikel Page', 'title' => 'Title Artikel Page'],
            ['routename' => 'socmed', 'meta_desc' => 'Meta Desc Social Media Page', 'meta_title' => 'Meta Title Social Media Page', 'title' => 'Title Social Media Page'],
            ['routename' => 'project', 'meta_desc' => 'Meta Desc Project Page', 'meta_title' => 'Meta Title Project Page', 'title' => 'Title Project Page'],
            ['routename' => 'contact', 'meta_desc' => 'Meta Desc Contact Page', 'meta_title' => 'Meta Title Contact Page', 'title' => 'Title Contact Page'],
        ];

        foreach ($menus as $menu) {
            MetaDescription::create($menu);
        }
    }
}
