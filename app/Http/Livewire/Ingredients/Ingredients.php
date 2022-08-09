<?php

namespace App\Http\Livewire\Ingredients;

use App\Models\Models\MainCategory as ModelsMainCategory;
use App\Models\Models\MainGroup;
use Livewire\Component;

class Ingredients extends Component
{
    public $main_groups;
    public $main_categories;
    public $main_categorie_id, $title, $unit;
    public $type_of_category = 'ingredients';
    public $main_group_id = 0;
    public $updateMode = false;
    public $createMode = false;

    public function render()
    {
        $this->main_groups = MainGroup::all();
        $this->main_categories = ModelsMainCategory::get()->where('type_of_category', 'ingredients');
        return view('livewire.ingredients.ingredients');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->title = '';
        $this->unit = '';
        $this->main_categorie_id = '';
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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'unit' => 'required',
            'main_group_id' => 'required',
            'type_of_category' => 'required',
        ]);

        ModelsMainCategory::create($validatedDate);
        session()->flash('message', 'Post Created Successfully.');
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $post = ModelsMainCategory::findOrFail($id);
        $this->main_categorie_id = $id;
        $this->title = $post->title;
        $this->unit = $post->unit;
        $this->main_group_id = $post->main_group_id;
        $this->updateMode = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'unit' => 'required',
            'main_categorie_id' => 'required',
        ]);

        $post = ModelsMainCategory::find($this->main_categorie_id);
        $post->update([
            'title' => $this->title,
            'unit' => $this->unit,
            'main_group_id' => $this->main_group_id,
            'type_of_category' => $this->type_of_category,
        ]);
        $this->updateMode = false;
        session()->flash('message', 'Post Updated Successfully.');
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        ModelsMainCategory::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
