<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
})->name('laravel');

Route::get('/', [App\Http\Controllers\TestingController::class, 'testing'])->name('home');

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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
| --------------------------------------------------------------------------
|
| O código que está chamando o método "testing" da classe "TestingController" que está localizada no diretório "app/Http/Controllers/TestingController.php".
| O método "testing" está retornando a view "testing.blade.php" que está localizada no diretório "resources/views".
|
|--------------------------------------------------------------------------
*/