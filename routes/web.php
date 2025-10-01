<?php

use Illuminate\Support\Facades\Route;

// -----------------------------------------------------------------------------
// ------------------------------- Menu Inicial --------------------------------
// -----------------------------------------------------------------------------

// # Página Inicial
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('site.home');

// Página de documentação do Laravel
Route::get('/laravel', function () {
    return view('welcome');
})->name('laravel');

// -----------------------------------------------------------------------------
// -------------------------------- Menu do App --------------------------------
// -----------------------------------------------------------------------------

// Autenticação de Usuários
Route::prefix('/auth')->group(function () {
    // View Formulário de login
    Route::get('/acessar', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('app.auth.login');
    // Processa o login do usuário
    Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('app.auth.login.process');
    // View Formulário de cadastro de usuário
    Route::get('/cadastro', [App\Http\Controllers\LoginController::class, 'showRegisterForm'])->name('app.auth.cadastro');
    // Processa o cadastro do usuário
    Route::post('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('app.auth.cadastro.process');
    // Faz o logout do usuário
    Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('app.auth.logout');
});

// Gerenciamento de fichas de personagens
Route::prefix('/characters')->group(function () {
    Route::get('/index', [App\Http\Controllers\CharacterController::class, 'index'])->name('app.characters.charindex');
    Route::get('/list', [App\Http\Controllers\CharacterController::class, 'list'])->name('app.characters.charlist');
    Route::get('/create', [App\Http\Controllers\CharacterController::class, 'create'])->name('app.characters.charcreate');
    Route::post('/store', [App\Http\Controllers\CharacterController::class, 'store'])->name('app.characters.charstore');
    Route::get('/{id}', [App\Http\Controllers\CharacterController::class, 'show'])->name('app.characters.charshow');
    Route::get('/{id}/edit', [App\Http\Controllers\CharacterController::class, 'edit'])->name('app.characters.charedit');
    Route::put('/{id}', [App\Http\Controllers\CharacterController::class, 'update'])->name('app.characters.charupdate');
    Route::delete('/{id}', [App\Http\Controllers\CharacterController::class, 'destroy'])->name('app.characters.chardestroy');
});

// Gerenciamento de Usuários
Route::prefix('/user')->group(function () {
    // Listagem de usuários
    Route::get('/list', [App\Http\Controllers\UserController::class, 'list'])->name('app.user.userlist');
});

// -----------------------------------------------------------------------------
// -------------------------------- Menu Extra ---------------------------------
// -----------------------------------------------------------------------------

// Página de Fallback (Página de erro)
Route::fallback(function () {
    echo 'A página acessada não existe. <a href="' . route('site.home') . '">Clique aqui</a> para voltar à página inicial.';
});
