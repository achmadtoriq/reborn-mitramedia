<?php

namespace App\Livewire\Pages;

use App\Models\Article;
use App\Models\MetaDescription;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Artikel extends Component
{
    public $meta_title;
    public $meta_desc;
    public $title;

    public $list_article;
    public $article;  // Untuk menyimpan artikel tunggal (detail)
    public $slug;     // Untuk menyimpan slug dari URL

    function mount($slug = null)
    {

        $routename = Route::currentRouteName();
        $result_meta = MetaDescription::where('routename', $routename)->first();

        $this->meta_title = $result_meta->meta_title;
        $this->meta_desc = $result_meta->meta_desc;
        $this->title = $result_meta->title;

        if ($slug) {
            $this->article = Article::with('tags')->where('slug', $slug)->first();
        } else {
            $this->list_article = Article::with('tags')->get()->sortDesc();
        }
    }

    public function render()
    {
        if ($this->slug) {
            return view('pages.artikel-detail');
        } else {
            return view('pages.artikel');
        }
    }
}
