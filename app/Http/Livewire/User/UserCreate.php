<?php

namespace App\Http\Livewire\User;

use Livewire\WithFileUploads;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserCreate extends Component
{
    use WithFileUploads;
    public $name;
    public $employee_id;
    public $phone;
    public $passport_photo;
    public $nrc_number;
    public $nrc_front_photo;
    public $nrc_back_photo;
    public $household_member_list;
    public $gender;
    public $address;
    public $department_id;
    public $role_id;
    public $employment_type;
    public $join_date;
    public $emergency_contact_person;
    public $emergency_contact_number;
    public $email;
    public $password;

    protected $rules = [
        'employee_id' => 'required|unique:users,employee_id',
        'name' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required',
        'passport_photo' => 'required',
    ];


    public function render()
    {
        return view('livewire.user.user-create');
    }

    public function storeUser()
    {
        $this->validate();
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->employee_id = $this->employee_id;
        $user->phone = $this->phone;
        $user->nrc_number = $this->nrc_number;
        $user->gender = $this->gender;
        $user->address = $this->address;
        $user->department_id = $this->department_id;
        $user->role_id = $this->role_id;
        $user->employment_type = $this->employment_type;
        $user->join_date = $this->join_date;
        $user->emergency_contact_person = $this->emergency_contact_person;
        $user->emergency_contact_number = $this->emergency_contact_number;
        $user->password = Hash::make($this->password);

        if ($this->passport_photo) {
            $passport_photo_file = $this->passport_photo->store('documents', 'public');
            $user->passport_photo = $passport_photo_file ?? '';
        }

        if ($this->nrc_front_photo) {
            $nrc_front_photo_file = $this->nrc_front_photo->store('documents', 'public');
            $user->nrc_front_photo = $nrc_front_photo_file ?? '';
        }

        if ($this->nrc_back_photo) {
            $nrc_back_photo_file = $this->nrc_back_photo->store('documents', 'public');
            $user->nrc_back_photo = $nrc_back_photo_file ?? '';
        }

        if ($this->household_member_list) {
            $household_member_list_file = $this->household_member_list->store('documents', 'public');
            $user->household_member_list = $household_member_list_file ?? '';
        }

        $user->save();
        session()->flash('message', 'Your processing has been completed.');
        $this->employee_id = '';
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }
}
