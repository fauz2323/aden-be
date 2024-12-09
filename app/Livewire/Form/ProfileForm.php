<?php

namespace App\Livewire\Form;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ProfileForm extends Component
{
    public $password, $password_confirmation, $old_password;

    protected $rules = [
        'old_password' => 'required',
        'password' => 'required|confirmed',
    ];

    public function render()
    {
        return view('livewire.form.profile-form');
    }

    function changePassword() {
        $this->validate();

        $user = User::find(auth()->user()->id);

        if (!Hash::check($this->old_password, $user->password)) {
           return session()->flash('error', 'Old password not match');
        }

        $user->password = Hash::make($this->password);
        $user->save();

        session()->flash('success', 'Password changed successfully');
    }
}
