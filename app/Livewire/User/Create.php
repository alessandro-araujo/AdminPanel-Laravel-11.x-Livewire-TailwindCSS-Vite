<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Sistema - Cadastro')]
class Create extends Component
{
    public $name;
    public $email;
    public $password;

    public function store()
    {

        $messages = [
            'name.required' => 'O campo Nome é obrigatório.',
            'name.string' => 'O Nome deve ser uma string válida.',
            'name.max' => 'O Nome não pode ter mais de 70 caracteres.',
            'email.required' => 'O campo E-mail é obrigatório.',
            'email.email' => 'O E-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'Este E-mail já está em uso.',
            'password.required' => 'O campo Senha é obrigatório.',
            'password.min' => 'A Senha deve ter pelo menos 6 caracteres.',
        ];

        // Realiza a validação
        $validated = $this->validate([
            'name' => 'required|string|max:70',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ], $messages);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return redirect()->route('user.index')->with('success', 'Usuário criado com sucesso!');
    }
    public function render()
    {
        return view('livewire.user.create');
    }
}
