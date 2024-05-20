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
            'telefone' => '98845-5563',
            'estado' => 'SP',
        ],
        [
            'nome' => 'Fornecedor 2',
            'status' => 'Inativo',
            'cnpj' => '11.222.333/0001-11',
            'telefone' => '98762-9970',
        ],
        [
            'nome' => 'Fornecedor 3',
            'status' => 'Ativo',
            'estado' => 'PE',
        ],
        [
            'nome' => 'Fornecedor 4',
            'status' => 'Inativo',
            'cnpj' => '22.222.333/0001-11',
            'estado' => 'RS',
        ]
    ];
        return view("app.fornecedor.index", compact('fornecedores'));
    }
}
