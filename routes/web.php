<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Rotas de Login
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/create-user-login', [LoginController::class, 'showCreateForm'])->name('login.create');
Route::post('/create-user', [LoginController::class, 'create'])->name('login.store');

// Rotas Protegidas por Middleware de Autenticação
Route::middleware(['auth'])->group(function() {
    // Rotas de Usuários (CRUD)
    Route::resource('users', UserController::class)->except(['index', 'show']);

    // Rotas de View de Usuários
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
