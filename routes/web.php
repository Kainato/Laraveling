<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/goodbye', function () { // QUAL O ENDEREÇO DA URL QUE SERÁ ACESSADO
    return view('goodbye'); // QUAL A BLADE VIEW QUE SERÁ RENDERIZADA
});

Route::get('/test', function () { // QUAL O ENDEREÇO DA URL QUE SERÁ ACESSADO
    // AS VARIÁVEIS QUE SERÃO PASSADAS PARA A BLADE VIEW
    // ELAS NÃO PRECISAM SER TIPADAS (String, int, bool, ...)
    $nome = "Caio";
    $$nome = $nome; // Declaração da nova variável. O identificador será o conteúdo de $nome (vulgo `Caio`)
    $minhaVariavel = true;

    return view('testing', // QUAL A BLADE VIEW QUE SERÁ RENDERIZADA
    ['nome' => $nome, 'nomezinho' => $$nome], // QUAL O ARRAY DE DADOS QUE SERÁ PASSADO PARA A BLADE VIEW
    ['proximaPaginaRecebeIsso'=> $minhaVariavel]
); 
});
