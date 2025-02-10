<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Title;
#[Title('Sistema - Usuários')]

class Index extends Component
{
    public $userName;
    public $users;
    public $id;

    public function mount()
    {
        // Pega o nome do usuário logado
        $this->userName = Auth::user() ? Auth::user()->name : 'Visitante';
        $this->users = User::all();
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Usuário excluído com sucesso!');
    }

    public function show($id)
    {
        return redirect()->route('user.show', ['id' => $id]);
    }

    public function render()
    {
        return view('livewire.user.index');
    }
}
