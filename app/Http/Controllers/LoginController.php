<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('app.auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return redirect()
                ->back()
                ->withErrors(['email' => 'E-mail inválido!']);
        }

        if (!Hash::check($credentials['password'], $user->password)) {
            return redirect()
                ->back()
                ->withErrors(['password' => 'Senha inválida!']);
        }

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('site.home')->with('success', 'Login realizado com sucesso!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('site.home')->with('success', 'Logout realizado com sucesso!');
    }

    public function showRegisterForm()
    {
        return view('app.auth.cadastro');
    }

    public function register(Request $request)
    {
        // Validação dos dados recebidos
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string',
        ]);

        // Aplica trim em todos os campos relevantes
        $data['nome'] = trim($data['nome']);
        $data['email'] = trim($data['email']);
        $data['password'] = trim($data['password']);

        // Verifica se o email já está cadastrado.
        $existingUser = User::withTrashed()->where('email', $data['email'])->first();
        if ($existingUser) {
            if ($existingUser->deleted_at !== null) {
                // Reativa a conta removendo o deleted_at
                $existingUser->restore();
                $existingUser->save();
                return redirect()->route('app.auth.login')->with('success', 'Conta reativada com sucesso!');
            } else {
                return redirect()
                    ->back()
                    ->withErrors(['email' => 'Este e-mail já está cadastrado!']);
            }
        }
        // Criação do usuário no banco de dados
        User::create([
            'name' => $data['nome'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        // Redireciona para a lista de usuários com uma mensagem de sucesso
        return redirect()->route('app.auth.login')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
