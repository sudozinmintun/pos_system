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
        $this->main_categories = MainCategory::get()->where('type_of_category', 'main_category');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function getSubGroups($id = 0)
    {
        $this->sub_groups = SubGroup::get()->where('main_category_id', $id);
    }
}
