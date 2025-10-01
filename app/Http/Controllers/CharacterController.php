<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        // Lógica para listar personagens
        $characters = Character::list();
        return view("app.characters.charindex", compact("characters"));
    }
    public function list()
    {
        // Lógica para listar personagens apenas do usuario logado
        $characters = Character::where('user_id', auth()->id())->get();
        return view("app.character.charlist", compact("characters"));
    }
    public function create()
    {
        // Lógica para mostrar o formulário de criação de personagem
    }
    public function store(Request $request)
    {
        // Lógica para salvar um novo personagem
    }
    public function show($id)
    {
        // Lógica para mostrar um personagem específico
    }
    public function edit($id)
    {
        // Lógica para mostrar o formulário de edição de personagem
    }
    public function update(Request $request, $id)
    {
        // Lógica para atualizar um personagem existente
    }
    public function destroy($id)
    {
        // Lógica para deletar um personagem
    }
}
