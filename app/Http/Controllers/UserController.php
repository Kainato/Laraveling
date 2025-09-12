<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users = [
        ['id' => 1, 'nome' => 'Alice', 'email' => 'alice@email.com'],
        ['id' => 2, 'nome' => 'Bob', 'email' => 'bob@email.com'],
        ['id' => 3, 'nome' => 'Carol', 'email' => 'carol@email.com'],
    ];

    public function index()
    {
        return response()->json($this->users);
    }

    public function show($id)
    {
        $user = collect($this->users)->firstWhere('id', (int) $id);

        if (!$user) {
            return response()->json(['error' => 'Usuário não encontrado'], 404);
        }

        return response()->json($user);
    }
}
