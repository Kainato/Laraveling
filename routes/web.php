<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
})->name('laravel');

Route::get('/', [App\Http\Controllers\TestingController::class, 'testing'])->name('home');

Route::get('/docsphp', [App\Http\Controllers\DocsPhpController::class, 'php'])->name('docsphp');

Route::get('/docshtml', [App\Http\Controllers\DocsHtmlController::class, 'html'])->name('docshtml');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
|--------------------------------------------------------------------------
| O código que está chamando o método "testing" da classe "TestingController" que está localizada no diretório "app/Http/Controllers/TestingController.php".
| O método "testing" está retornando a view "testing.blade.php" que está localizada no diretório "resources/views".
| O método "testing" está recebendo um array de dados que será passado para a view "testing.blade.php".
| O array de dados contém as variáveis $nome, $nomezinho, $proximaPaginaRecebeIsso e $numero.
*/
