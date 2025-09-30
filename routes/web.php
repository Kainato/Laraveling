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
    Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('app.auth.login');
    // Processa o login do usuário
    Route::post('/', [App\Http\Controllers\LoginController::class, 'login'])->name('app.auth.login.process');
    // View Formulário de cadastro de usuário
    Route::get('/register', [App\Http\Controllers\LoginController::class, 'showRegisterForm'])->name('app.auth.cadastro');
    // Processa o cadastro do usuário
    Route::post('/store', [App\Http\Controllers\LoginController::class, 'register'])->name('app.auth.cadastro.process');
    // Faz o logout do usuário
    Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('app.auth.logout');
});

// Rotas da integração com o usuário do Banco MySQL
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
