<?php

use Illuminate\Support\Facades\Route;

// -----------------------------------------------------------------------------
// ------------------------------- Menu  Inicial -------------------------------
// -----------------------------------------------------------------------------

// # Página Inicial
// URL: http://localhost:8000/
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('site.home');

// # Página de Informações
// URL: http://localhost:8000/sobre
Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'sobre'])->name('site.sobre');

// # Página de Contato
// URL: http://localhost:8000/contato
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

// # Página de Login para área de APP
// URL: http://localhost:8000/login
Route::get('/login', function () {
    return 'Página de Login';
})->name('site.login');

// -----------------------------------------------------------------------------
// -------------------------------- Menu do App --------------------------------
// -----------------------------------------------------------------------------

// Rotas de Redirecionamento para a área de APP
// Só é possível acessar as rotas abaixo se tiver anteriorente o prefixo "/app"
Route::prefix('/app')->group(function () {
    // Página de clientes
    // URL: http://localhost:8000/app/clientes
    Route::get('/clientes', function () {
        return 'Área do cliente';
    })->name('app.clientes');

    // Página de fornecedores
    // URL: http://localhost:8000/app/fornecedores
    Route::get('/fornecedores', function () {
        return 'Área do fornecedor';
    })->name('app.fornecedores');

    // Página de produtos
    // URL: http://localhost:8000/app/produtos
    Route::get('/produtos', function () {
        return 'Página de produtos';
    })->name('app.produtos');
});

// -----------------------------------------------------------------------------
// -------------------------------- Menu  Extra --------------------------------
// -----------------------------------------------------------------------------

// Página de Fallback (Página de erro)
// URL: http://localhost:8000/{qualquer_rota_não_existente}
Route::fallback(function () {
    echo 'A página acessada não existe. <a href="' . route('site.home') . '">Clique aqui</a> para voltar à página inicial.';
});

// Página de Playtest
// URL: http://localhost:8000/playtest
Route::get('/playtest', [App\Http\Controllers\PlaytestController::class, 'playtest'])->name('playtest');

// Página de documentação do Laravel
// URL: http://localhost:8000/laravel
Route::get('/laravel', function () {
    return view('wel
come');
})->name('laravel');

// -----------------------------------------------------------------------------
// ---------------------------- Menu de Aprendizado ----------------------------
// -----------------------------------------------------------------------------

// Rotas de Redirecionamento para a área de testes
// Só é possível acessar as rotas abaixo se tiver anteriorente o prefixo "/test"
Route::prefix('/test')->group(function () {
    // Página de teste com parâmetros derivados por array associativo
    // URL: http://localhost:8000/test/1/2
    Route::get(
        '/{p1}/{p2}',
        [App\Http\Controllers\TestRotasController::class, 'rotasArray']
    );
    // Página de teste com parâmetros derivados por compact
    // URL: http://localhost:8000/test/100
    Route::get(
        '/{p1}',
        [App\Http\Controllers\TestRotasController::class, 'rotasCompact']
    );
    // Página de teste com parâmetros derivados por with
    // URL: http://localhost:8000/test/10/20/30
    Route::get(
        '/{p1}/{p2}/{p3}',
        [App\Http\Controllers\TestRotasController::class, 'rotasWith']
    );
});

// Página de redirecionamento
// URL: http://localhost:8000/rota2
Route::get('/rota2', function () {
    return redirect()->route('site.teste');
})->name('site.rota2');

// Página de parâmetros
// URL: http://localhost:8000/parametros/1
// URL: http://localhost:8000/parametros/1/Caio
// URL: http://localhost:8000/parametros/1/Caio/Hello_World
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