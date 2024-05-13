<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRotasController extends Controller
{
    public function rotasArray(int $p1, int $p2) {
        // Criando por array associativo
        return view("test.rotasArray", ['x' => $p1,'y'=> $p2, 'z' => ($p1 + $p2)]);
    }

    public function rotasCompact(int $p1) {
        // Criando por compact
        return view("test.rotasCompact", compact('p1'));
    }

    public function rotasWith(int $p1, int $p2, int $p3) {
        // Criando por with
        return view("test.rotasWith")->with('p1', $p1)->with('p2', $p2)->with('p3', $p3)->with('soma', $p1 + $p2 + $p3);
    }
}