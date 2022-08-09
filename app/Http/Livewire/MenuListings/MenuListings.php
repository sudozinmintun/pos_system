<?php

namespace App\Http\Livewire\MenuListings;

use App\Models\Models\Ingredients;
use App\Models\Models\MainCategory;
use App\Models\Models\SubGroup;
use Livewire\Component;

class MenuListings extends Component
{
    public $main_categories;
    
    
    public $sub_groups;
    public $ingredients;

    public $main_categorie_id, $title;

    public $createMode = false;
    public $updateMode = false;

    public function render()
    {
        $this->main_categories = MainCategory::get()->where('type_of_category', 'main_category');
        return view('livewire.menu-listings.menu-listings');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function addIngredients($id)
    {
        $this->ingredients = Ingredients::all();
        $sub_group = SubGroup::findOrFail($id);
        $this->main_categorie_id = $id;
        $this->title = $sub_group->title;
        $this->createMode = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->title = '';
        $this->category = '';
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function crate_model()
    {
        $this->createMode = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel_create()
    {
        $this->createMode = false;
    }
}
