<?php

namespace App\Livewire\Pages;

use App\Models\Layanan;
use App\Models\MetaDescription;
use App\Models\Partner;
use App\Models\Produk;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Home extends Component
{
    public $meta_title;
    public $meta_desc;
    public $title;
    public $keunggulan;
    public $products;
    public $partners;

    function mount() {
        $routename = Route::currentRouteName();
        $result_meta = MetaDescription::where('routename', $routename)->first();

        $this->keunggulan = Cache::remember('keunggulan_cache', now()->addDay(), function () {
            return Layanan::get();
        });

        $this->products = Cache::remember('products_cache', now()->addDay(), function () {
            return Produk::get();
        });

        $this->partners = Cache::remember('partners_cache', now()->addDay(), function () {
            return Partner::get();
        });

        $this->meta_title = $result_meta->meta_title;
        $this->meta_desc = $result_meta->meta_desc;
        $this->title = $result_meta->title;
    }

    public function render()
    {
        return view('pages.home');
    }
}
