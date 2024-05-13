<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaytestController extends Controller
{
    public function playtest() {
        return view('playtest', [
            // Define a variável $nome com o valor "Fulano" do tipo string
            'nome' => 'Caio Calado',
            // Define a variável $souReal com o valor true do tipo boolean
            'souReal' => true,
            // Define a variável $numero com o valor 42 do tipo integer
            'numero' => 42,
            // Define a variável $pessoas como classe contendo os atributos nome e idade
            'pessoas' => [
                (object) ['nome' => 'Caio', 'idade' => 22],
                (object) ['nome' => 'Fulano', 'idade' => 33],
                (object) ['nome' => 'Beltrano', 'idade' => 44],
            ],
        ]);
    }
}