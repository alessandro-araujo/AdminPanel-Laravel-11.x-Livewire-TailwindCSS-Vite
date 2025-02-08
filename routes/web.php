<?php


use App\Livewire\Login as LivewireLogin;
use App\Livewire\Register as LivewireRegister;
use App\Livewire\User\Index as LivewireIndexUser;
use App\Livewire\User\Show as LivewireUser;
use App\Livewire\User\Create as LivewireCreate;
use Illuminate\Support\Facades\Route;

// Rotas de Login e Registro
Route::get('/', LivewireLogin::class)->name('login');
Route::get('/register', LivewireRegister::class)->name('register');

// Rotas Protegidas por Middleware de Autenticação
Route::middleware(['auth'])->group(function() {
//     // Rotas de View de Usuários
      Route::get('/users', LivewireIndexUser::class)->name('user.index');
      Route::get('/users/{id}', LivewireUser::class)->name('user.show');
      Route::get('/create', LivewireCreate::class)->name('user.create');
});
