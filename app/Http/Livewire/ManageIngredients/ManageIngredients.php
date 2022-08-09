<?php

namespace App\Http\Livewire\ManageIngredients;

use App\Models\Models\MainCategory;
use App\Models\Models\ManageIngredients as ModelsManageIngredients;
use App\Models\Models\SubGroup;
use Livewire\Component;

class ManageIngredients extends Component
{
    public $sub_groups;
    public $main_categories;
    public $manage_ingredients;

    public $sub_group_id, $main_categorie_id, $unit, $number_of_unit, $price;

    public function mount($id)
    {
        // $this->main_categories = MainCategory::get()->where('type_of_category', 'main_category');
        $this->main_categories = MainCategory::all();
        $this->sub_groups = SubGroup::find($id);
        $this->sub_group_id = $id;
    }

    public function render()
    {
        $this->manage_ingredients = ModelsManageIngredients::get()->where('sub_group_id', $this->sub_group_id);
        return view('livewire.manage-ingredients.manage-ingredients');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'main_categorie_id' => 'required',
            'sub_group_id' => 'required',
            'number_of_unit' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        ModelsManageIngredients::Create([
            'main_categorie_id' => $this->main_categorie_id,
            'sub_group_id' => $this->sub_group_id,
            'number_of_unit' => $this->number_of_unit,
            'price' => $this->price,
        ]);
        session()->flash('message', 'Created Successfully.');
        $this->resetInputFields();
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function changeEvent($value = null)
    {
        if ($value == null) {
            $this->unit = 0;
        } else {
            $post = MainCategory::findOrFail($value);
            $this->unit = $post->unit;
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->number_of_unit = '';
        $this->price = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        ModelsManageIngredients::find($id)->delete();
        session()->flash('message', 'Deleted Successfully.');
    }
}
