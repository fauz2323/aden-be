<?php

namespace App\Livewire\Form;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;
    public function render()
    {
        return view('livewire.form.login');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $this->email)->first();
        if (!$user || $user->type == 'user') {
            session()->flash('error', 'User not found');
            return;
        }

        if (!password_verify($this->password, $user->password)) {
            session()->flash('error', 'Password not match');
            return;
        }

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->to('home');
        }
    }
}
