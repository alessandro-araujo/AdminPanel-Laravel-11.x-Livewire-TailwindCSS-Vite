<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Create extends Component
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

        return redirect()->route('user.index')->with('success', 'Usuário criado com sucesso!');
    }
    public function render()
    {
        return view('livewire.user.create');
    }
}
