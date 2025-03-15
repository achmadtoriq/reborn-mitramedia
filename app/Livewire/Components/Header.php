<?php

namespace App\Livewire\Components;

use App\Models\mitra_menus;
use Livewire\Component;

class Header extends Component
{
    public $menus;
    function mount()
    {
        $this->menus = mitra_menus::all();
    }

    public function render()
    {
        return view('components.header');
    }
}
