<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\RateLimiter;

class LoginController extends Controller
{
    // Exibe o formulário de login
    public function showLoginForm()
    {
        return view('login.index');
    }

    // Processa o login do usuário
    public function login(LoginRequest $request)
    {
        // Validar o formulário
        $request->validated();

        // Proteção contra tentativas excessivas
        $key = 'login-attempts:' . $request->ip();
        if (RateLimiter::tooManyAttempts($key, 5)) {
            return back()->with('error', 'Muitas tentativas de login. Tente novamente mais tarde.');
        }

        // Validar usuário e senha no banco de dados
        $authenticated = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if(!$authenticated){
            // Erro ao conseguir logar no sistema
            return back()->withInput()->with('error', 'E-mail ou Senha inválida');
        }

        // Regeneração da sessão para segurança
        $request->session()->regenerate();

        // Direcionar para o dashboard
        return redirect()->back()->withErrors(['login' => 'Credenciais inválidas']);
    }

    // Efetua o logout do usuário
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login.form')->with('success', 'Deslogado com sucesso!');
    }

    // Exibe o formulário de criação de novo usuário para login
    public function showCreateForm()
    {
        return view('login.create');
    }

    // Processa a criação do novo usuário
    public function create(UserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('login.form')->with('success', 'Usuário criado com sucesso!');
    }
}
