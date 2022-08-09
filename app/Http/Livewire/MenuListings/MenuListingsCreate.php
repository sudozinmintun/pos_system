<?php

namespace App\Http\Livewire\MenuListings;

use App\Models\Models\MainCategory;
use App\Models\Models\MainGroup;
use App\Models\Models\SubGroup;
use Livewire\Component;
use Livewire\WithFileUploads;

class MenuListingsCreate extends Component
{
    use WithFileUploads;
    public $main_categories;
    public $main_category_id, $title, $sales_price, $photo;

    protected $rules = [
        'title' => 'required',
        'main_category_id' => 'required',
        'sales_price' => 'required|numeric',
    ];

    public function render()
    {
        $this->main_categories = MainCategory::get()->where('type_of_category', 'main_category');
        return view('livewire.menu-listings.menu-listings-create');
    }

    public function storeSubGroups()
    {
        $this->validate();
        $sub_group = new SubGroup();
        $sub_group->title = $this->title;
        $sub_group->main_category_id = $this->main_category_id;
        $sub_group->sales_price = $this->sales_price;
        if ($this->photo) {
            $photo = $this->photo->store('menu', 'public');
            $sub_group->photo = $photo ?? '';
        }
        $sub_group->save();
        session()->flash('message', 'Your processing has been completed.');
        $this->title = '';
        $this->photo = '';
        $this->main_category_id = '';
        $this->sales_price = '';
    }
}
