<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $user = \App\Models\User::where('email', $request->email)
                ->whereNull('deleted_at')
                ->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json(['message' => 'Suas credenciais estão inválidas ou você ainda não se cadastrou!'], 401);
            }

            $token = $user->createToken('api-token')->plainTextToken;

            return response()->json([
                'message' => 'Login realizado com sucesso!',
                'token' => $token,
                'user' => $user,
            ]);
        } catch (\Throwable $e) {
            return response()->json(['message' => 'Erro ao realizar login!', 'error' => $e->getMessage()], 500);
        }
    }
    public function logout(Request $request)
    {
        try {
            $user = $request->user();

            if ($user instanceof \App\Models\User) {
                /** @var \Laravel\Sanctum\PersonalAccessToken|null $token */
                $token = $user->currentAccessToken();

                if ($token) {
                    $token->delete();
                }

                $user->forceFill(['remember_token' => null])->save();
            } else {
                return response()->json(['message' => 'Usuário não autenticado'], 401);
            }

            return response()->json(['message' => 'Logout realizado com sucesso!']);
        } catch (\Throwable $e) {
            return response()->json(['message' => 'Erro ao realizar logout!', 'error' => $e->getMessage()], 500);
        }
    }
    public function register(Request $request)
    {
        try {
            $request->validate([
                'nome' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6',
            ]);

            $user = \App\Models\User::create([
                'name' => $request->nome,
                'email' => $request->email,
                'password' => $request->password
            ]);

            $token = $user->createToken('api-token')->plainTextToken;

            return response()->json([
                'message' => 'Usuário criado com sucesso!',
                'token' => $token,
                'user' => $user,
            ]);
        } catch (\Throwable $e) {
            return response()->json(['message' => 'Erro ao criar usuário!', 'error' => $e->getMessage()], 500);
        }
    }
}
