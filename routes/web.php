<?php

use Illuminate\Support\Facades\Route;

// Página Inicial
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('site.home');

// Página de Fallback (Página de erro)
Route::fallback(function () {
    echo 'A página acessada não existe. <a href="' . route('site.home') . '">Clique aqui</a> para voltar à página inicial.';
});

// Página de Informações
Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'sobre'])->name('site.sobre');

// Página de Contato
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

// Página de Playtest
Route::get('/playtest', [App\Http\Controllers\PlaytestController::class, 'playtest'])->name('playtest');

// Página de Login para área de APP
Route::get('/login', function () {
    return 'Página de Login';
})->name('site.login');

// Rotas de Redirecionamento para a área de APP
Route::prefix('/app')->group(function () {
    // Página de clientes
    Route::get('/clientes', function () {
        return 'Área do cliente';
    })->name('app.clientes');

    // Página de fornecedores
    Route::get('/fornecedores', function () {
        return 'Área do fornecedor';
    })->name('app.fornecedores');

    // Página de produtos
    Route::get('/produtos', function () {
        return 'Página de produtos';
    })->name('app.produtos');
});

// Rotas de Redirecionamento para a área de testes
Route::prefix('/test')->group(function () {
    Route::get(
        '/{p1}/{p2}',
        [App\Http\Controllers\TestRotasController::class, 'rotasArray']
    );
    Route::get(
        '/{p1}',
        [App\Http\Controllers\TestRotasController::class, 'rotasCompact']
    );
    Route::get(
        '/{p1}/{p2}/{p3}',
        [App\Http\Controllers\TestRotasController::class, 'rotasWith']
    );
});

// Página de redirecionamento
Route::get('/rota2', function () {
    return redirect()->route('site.teste');
})->name('site.rota2');

// Página de parâmetros
Route::get(
    '/parametros/{id}/{nome?}/{mensagem?}',
    function (
        int $identificador,
    ) {
        $name = request('nome');
        $message = request('mensagem');

        echo "* Id: $identificador <br>";
        echo "Nome (opcional): $name <br>";
        echo "Mensagem (opcional): $message <br>";
    }
)->where('id', '[0-9]')->where('nome', '[A-Za-z]+')->name('parametros');

// Página de documentação do Laravel
Route::get('/laravel', function () {
    return view('welcome');
})->name('laravel');