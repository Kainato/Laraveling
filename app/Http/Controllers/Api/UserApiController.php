<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function show($id)
    {
        $user = \App\Models\User::find($id);
        if ($user) {
            return response()->json($user);
        }

        return response()->json(['message' => 'Usuário não encontrado'], 404);
    }
    public function update(Request $request, $id)
    {
        $user = \App\Models\User::find($id);
        if ($user) {
            $user->update($request->only(['nome', 'idade', 'password']));
            return response()->json($user);
        }
        return response()->json(['message'=> 'Usuário não encontrado'],404);
    }
    public function list()
    {
        $users = \App\Models\User::all();
        return response()->json($users);
    }
}
