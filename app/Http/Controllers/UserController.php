<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{



    // Processa a criação do usuário
    public function store(Request $request)
    {
        $data = $request->validated();
        User::create($data);
        return redirect()->route('user.index')->with('success', 'Usuário criado com sucesso!');
    }

    // Exibe os detalhes de um usuário
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Exibe o formulário de edição do usuário
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Processa a atualização do usuário
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => "required|email|unique:users,email,{$user->id}",
        ]);

        $user->update($data);

        return redirect()->route('user.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    // Processa a exclusão do usuário
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Usuário excluído com sucesso!');
    }

}
