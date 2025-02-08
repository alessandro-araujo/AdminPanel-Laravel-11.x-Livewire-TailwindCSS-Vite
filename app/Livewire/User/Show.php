<?php

namespace App\Livewire\User;
use Livewire\Attributes\Title;
use App\Models\User;
use Livewire\Component;
#[Title('Vizualizar Usuário')]

class Show extends Component
{
    public $users;

    public function mount(User $id)
    {
        $this->users = User::where('id', $id->id)->get();
    }
    public function render()
    {
        return view('livewire.user.show');
    }
}
