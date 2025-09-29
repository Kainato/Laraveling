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

// Rotas da integração com o usuário do Banco MySQL
Route::prefix('/user')->group(function () {
    // Listagem de usuários
    // URL: http://localhost:8000/user/listagem
    Route::get('/list', [App\Http\Controllers\UserController::class, 'list'])->name('app.user.userlist');
    // Rota para adicionar novo usuário
    // URL: http://localhost:8000/user/add
    Route::get('/add', [App\Http\Controllers\UserController::class, 'create'])->name('app.user.usercreate');
    // Rota para chamar a função do controlador que salva o novo usuário
    // URL: http://localhost:8000/user/store
    Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('app.user.store');
});

// -----------------------------------------------------------------------------
// -------------------------------- Menu Extra ---------------------------------
// -----------------------------------------------------------------------------

// Página de Fallback (Página de erro)
// URL: http://localhost:8000/{qualquer_rota_não_existente}
Route::fallback(function () {
    echo 'A página acessada não existe. <a href="' . route('site.home') . '">Clique aqui</a> para voltar à página inicial.';
});
