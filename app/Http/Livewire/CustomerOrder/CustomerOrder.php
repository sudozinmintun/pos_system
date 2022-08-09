<?php

namespace App\Http\Livewire\CustomerOrder;

use App\Models\Models\MainCategory;
use App\Models\Models\MainGroup;
use App\Models\Models\SubGroup;
use Livewire\Component;

class CustomerOrder extends Component
{
    public $main_groups;
    public $main_categories;
    public $sub_groups;

    public function render()
    {
        $this->main_groups = MainGroup::all();
        $this->sub_groups = SubGroup::all();
        $this->getMainCategory(0);
        return view('livewire.customer-order.customer-order');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function getMainCategory($id = 0)
    {
        $this->main_categories = MainCategory::get()->where('main_group_id', $id);
    }

    public function getAllMainCategory()
    {
        // $this->main_categories = MainCategory::all();
    }
}
