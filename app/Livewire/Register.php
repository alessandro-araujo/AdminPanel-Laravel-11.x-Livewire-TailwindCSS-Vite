<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    public function save()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)

        ]);

        return redirect()->route('login')->with('success', 'Usuário criado com sucesso!');
    }
    public function render()
    {
        return view('livewire.register');
    }
}
