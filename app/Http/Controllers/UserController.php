<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('app.user.usercreate');
    }
    /// Armazena um novo usuário no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'nullable|string|max:20',
            'idade' => 'nullable|integer',
            'situacao' => 'nullable|in:true,false',
            'password' => 'required|string',
        ]);
        // Criação do usuário no banco de dados
        User::create([
            'name' => $data['nome'],
            'email' => $data['email'],
            'telefone' => $data['telefone'] ?? null,
            'idade' => $data['idade'] ?? null,
            'situacao' => $data['situacao'] ?? false,
            'password' => bcrypt($data['password']),
        ]);
        // Redireciona para a lista de usuários com uma mensagem de sucesso
        return redirect()->route('app.user.userlist')->with('success', 'Usuário cadastrado com sucesso!');
    }
    /// Atualiza os dados de um usuário existente
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
    }
    /// Atualiza apenas o email de um usuário existente
    public function updateEmail(Request $request, User $user)
    {
        $user->update(['email' => $request->input('email')]);
    }
    /// Remove um usuário do banco de dados
    public function destroy(User $user)
    {
        $user->delete();
    }
    /// Exibe os detalhes de um usuário específico
    public function show(User $user)
    {
        return response()->json($user);
    }
    /// Lista todos os usuários
    public function list()
    {
        $users = User::list();
        return view('app.user.userlist', compact('users'));
    }
}
