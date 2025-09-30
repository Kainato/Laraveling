<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('app.auth.login');
    }
    public function login(Request $request) {
        // Aplica trim nos campos antes da validação
        $email = trim($request->input('email'));
        $password = trim($request->input('password'));

        // Lógica de autenticação aqui
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::where('email', $email)->first();
        if ($user && Hash::check($password, $user->password)) {
            // Gera um novo token
            $token = bin2hex(random_bytes(32));
            // Salva o token na coluna remember_token
            $user->remember_token = $token;
            $user->save();

            Auth::login($user);
            return redirect()->route('site.home')->with('success', 'Login realizado com sucesso!');
        }
        return redirect()->back()->withErrors(['email' => 'Credenciais inválidas']);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('site.home')->with('success', 'Logout realizado com sucesso!');
    }

    public function showRegisterForm() {
        return view('app.auth.cadastro');
    }

    public function register(Request $request)
    {
        // Validação dos dados recebidos
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'nullable|string|max:20',
            'idade' => 'required|integer',
            'situacao' => 'nullable|in:true,false',
            'password' => 'required|string',
        ]);

        // Aplica trim em todos os campos relevantes
        $data['nome'] = trim($data['nome']);
        $data['email'] = trim($data['email']);
        $data['telefone'] = isset($data['telefone']) ? trim($data['telefone']) : null;
        $data['idade'] = trim((string)$data['idade']);
        $data['password'] = trim($data['password']);

        // Criação do usuário no banco de dados
        User::create([
            'name' => $data['nome'],
            'email' => $data['email'],
            'telefone' => $data['telefone'],
            'idade' => $data['idade'],
            'situacao' => true,
            'password' => $data['password'] ?? '123456', // Removido bcrypt, mutator já faz a criptografia
        ]);
        // Redireciona para a lista de usuários com uma mensagem de sucesso
        return redirect()->route('app.auth.login')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
