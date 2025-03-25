<?php

use App\Livewire\Pages\Artikel;
use App\Livewire\Pages\Project;
use App\Models\mitra_menus;
use Illuminate\Support\Facades\Route;
$menus = mitra_menus::all();

foreach ($menus as $menu) {
    if (class_exists($menu->classname) && $menu->is_active == true) {
        Route::get($menu->url, $menu->classname)->name(strtolower(class_basename($menu->classname)));
    }
}

Route::get("/artikel/{slug}", Artikel::class)->name('article.show');

Route::get("/project/{slug}", Project::class)->name('project.show');

Route::fallback(function () {
    return response()->view('layouts.error', [], 404);
});

