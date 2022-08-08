<?php

namespace App\Http\Livewire\MainGroup;

use App\Models\Models\MainGroup as ModelsMainGroup;
use Livewire\Component;

class MainGroup extends Component
{

    public $main_groups, $title, $category, $main_group_id;
    public $updateMode = false;
    public $createMode = false;

    public function render()
    {
        $this->main_groups = ModelsMainGroup::all();
        return view('livewire.main-group.main-group');
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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'category' => 'required',
        ]);

        ModelsMainGroup::create($validatedDate);
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
        $post = ModelsMainGroup::findOrFail($id);
        $this->main_group_id = $id;
        $this->title = $post->title;
        $this->category = $post->category;
        $this->updateMode = true;
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
    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'category' => 'required',
        ]);

        $post = ModelsMainGroup::find($this->main_group_id);
        $post->update([
            'title' => $this->title,
            'category' => $this->category,
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
    public function delete($id)
    {
        ModelsMainGroup::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
