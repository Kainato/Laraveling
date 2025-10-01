<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function show($id)
    {
        try {
            $user = User::find($id);
            if ($user) {
                return response()->json($user);
            } else {
                return response()->json(['message' => 'Usuário não encontrado!'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(
                [
                    'message' => 'Erro ao buscar usuário!',
                    'error' => $e->getMessage(),
                ],
                500,
            );
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Captura todos os dados enviados
            $data = $request->all();

            // Busca o usuário; retorna 404 se não existir
            $user = User::find($id);
            if (!$user) {
                return response()->json(['message' => 'Usuário não encontrado!'], 404);
            }

            // Atualiza os campos permitidos
            if (isset($data['name'])) {
                $user->name = $data['name'];
            }
            if (isset($data['email'])) {
                $user->email = $data['email'];
            }
            if (isset($data['password'])) {
                $user->password = bcrypt($data['password']);
            }

            $user->save();

            return response()->json(['message' => 'Usuário atualizado com sucesso', 'user' => $user], 200);
        } catch (\Exception $e) {
            return response()->json(
                [
                    'message' => 'Erro ao atualizar usuário',
                    'error' => $e->getMessage(),
                ],
                500,
            );
        }
    }
    public function list()
    {
        try {
            $users = User::all();
            return response()->json($users);
        } catch (\Exception $e) {
            return response()->json(
                [
                    'message' => 'Erro ao listar usuários',
                    'error' => $e->getMessage(),
                ],
                500,
            );
        }
    }
}
