<?php

namespace App\Livewire\Pages;

use App\Models\MetaDescription;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Project extends Component
{
    public $meta_title;
    public $meta_desc;
    public $title;

    function mount() {
        $routename = Route::currentRouteName();
        $result_meta = MetaDescription::where('routename', $routename)->first();

        $this->meta_title = $result_meta->meta_title;
        $this->meta_desc = $result_meta->meta_desc;
        $this->title = $result_meta->title;
    }

    public function render()
    {
        return view('pages.project');
    }
}
