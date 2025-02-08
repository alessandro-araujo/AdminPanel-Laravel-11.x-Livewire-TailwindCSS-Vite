<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {

        $authenticated = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if(!$authenticated){
            // Erro ao conseguir logar no sistema
            return redirect()->route('login')->with('error', 'E-mail ou Senha inválida');

        }
        return redirect()->route('user.index')->with('success', 'Usuário criado com sucesso!');
    }
    #[Title('Login')]
    public function render()
    {
        return view('livewire.login');
    }
}
