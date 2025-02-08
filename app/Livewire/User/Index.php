<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Title;

class Index extends Component
{
    public $userName;
    public $users;

    public function mount()
    {
        // Pega o nome do usuário logado
        $this->userName = Auth::user() ? Auth::user()->name : 'Visitante';
        $this->users = User::all();
    }


    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Deslogado com sucesso!');
    }

    #[Title('Sistema - Table Users')]
    public function render()
    {
        return view('livewire.user.index');
    }
}
