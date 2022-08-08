<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserController extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.user.index', ['users' => $users]);
    }
}
