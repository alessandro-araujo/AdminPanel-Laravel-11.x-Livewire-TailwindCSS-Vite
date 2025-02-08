<?php


use App\Livewire\Login as LivewireLogin;
use App\Livewire\Register as LivewireRegister;
use App\Livewire\User\Index as LivewireIndexUser;
use App\Livewire\User\Show as LivewireUser;
use Illuminate\Support\Facades\Route;

// Rotas de Login e Registro
Route::get('/', LivewireLogin::class)->name('login');
Route::get('/register', LivewireRegister::class)->name('register');

// Route::get('/create-user-login', [LoginController::class, 'showCreateForm'])->name('login.create');
// Route::post('/create-user', [LoginController::class, 'create'])->name('login.store');

// // Rotas Protegidas por Middleware de Autenticação
Route::middleware(['auth'])->group(function() {
//     // Rotas de Usuários (CRUD)
//     Route::resource('users', UserController::class)->except(['index', 'show']);

//     // Rotas de View de Usuários
      Route::get('/users', LivewireIndexUser::class)->name('user.index');
      Route::get('/users/{id}', LivewireUser::class)->name('user.show');
//     Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
//     Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
//     Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
