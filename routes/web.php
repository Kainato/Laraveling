<?php

use Illuminate\Support\Facades\Route;

// -----------------------------------------------------------------------------
// ------------------------------- Menu Inicial --------------------------------
// -----------------------------------------------------------------------------

// # Página Inicial
// URL: http://localhost:8000/
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('site.home');

// Página de documentação do Laravel
// URL: http://localhost:8000/laravel
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
});

// Rotas da integração com o usuário do Banco MySQL
Route::prefix('/user')->group(function () {
    // Listagem de usuários
    // URL: http://localhost:8000/user/listagem
    Route::get('/list', [App\Http\Controllers\UserController::class, 'list'])->name('app.user.userlist');
});

// -----------------------------------------------------------------------------
// -------------------------------- Menu Extra ---------------------------------
// -----------------------------------------------------------------------------

// Página de Fallback (Página de erro)
// URL: http://localhost:8000/{qualquer_rota_não_existente}
Route::fallback(function () {
    echo 'A página acessada não existe. <a href="' . route('site.home') . '">Clique aqui</a> para voltar à página inicial.';
});
