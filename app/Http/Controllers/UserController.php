<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserModel;


class UserController extends Controller
{
    /// Armazena um novo usuário no banco de dados
    public function store(Request $request)
    {
        UserModel::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password'=> bcrypt($request->input('password')),
        ]);
    }
    /// Atualiza os dados de um usuário existente
    public function update(Request $request, UserModel $user)
    {
        $user->update($request->all());
    }
    /// Atualiza apenas o email de um usuário existente
    public function updateEmail(Request $request, UserModel $user)
    {
        $user->update(['email' => $request->input('email')]);
    }
    /// Remove um usuário do banco de dados
    public function destroy(UserModel $user)
    {
        $user->delete();
    }
    /// Exibe os detalhes de um usuário específico
    public function show(UserModel $user)
    {
        return response()->json($user);
    }
    /// Lista todos os usuários
    public function list()
    {
        $users = UserModel::list();
        return view("site.usuarios", compact('users'));
    }
}
