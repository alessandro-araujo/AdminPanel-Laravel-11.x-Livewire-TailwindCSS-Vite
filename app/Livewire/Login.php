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
        $messages = [
            'email.required' => 'Campo e-mail é obrigatorio',
            'email.email' => 'Campo deve ser um email valido!',
            'password.required' => 'Campo senha é obrigatorio',
        ];

        // Realiza a validação
        $validated = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], $messages);


        $authenticated = Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']]);

        if(!$authenticated){
            return redirect()->route('login')->with('error', 'E-mail ou Senha inválida');

        }
        return redirect()->route('user.index');
    }
    #[Title('Login')]
    public function render()
    {
        return view('livewire.login');
    }
}
