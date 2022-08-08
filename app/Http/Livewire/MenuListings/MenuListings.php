<?php

namespace App\Http\Livewire\MenuListings;

use App\Models\Models\MainCategory;
use App\Models\Models\SubGroup;
use Livewire\Component;

class MenuListings extends Component
{
    public $main_categories;
    public function render()
    {
        $this->main_categories = MainCategory::all();
        return view('livewire.menu-listings.menu-listings');
    }
}
