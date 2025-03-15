<?php

use App\Models\mitra_menus;
use Illuminate\Support\Facades\Route;
$menus = mitra_menus::all();

foreach ($menus as $menu) {
    if (class_exists($menu->classname)) {
        Route::get($menu->url, $menu->classname)->name(strtolower(class_basename($menu->classname)));
    }
}

Route::fallback(function () {
    return response()->view('layouts.error', [], 404);
});

