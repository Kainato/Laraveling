<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
        [
            'nome' => 'Fornecedor 1',
            'status' => 'Ativo',
            'telefone' => '11 9999-9999',
        ],
        [
            'nome' => 'Fornecedor 2',
            'status' => 'Inativo',
            'telefone' => '22 9999-9999'
        ],
        [
            'nome' => 'Fornecedor 3',
            'status' => 'Ativo'
        ],
        [
            'nome' => 'Fornecedor 4',
            'status' => 'Inativo'
        ]
    ];
        return view("app.fornecedor.index", compact('fornecedores'));
    }
}