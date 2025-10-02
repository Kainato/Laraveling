<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Classes;
use App\Models\Origin;
use App\Models\Trail;

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
        $classes = Classes::list();
        $origins = Origin::list();
        $trails = Trail::list();
        return view("app.character.charcreate", compact("classes", "origins", "trails"));
    }
    public function store(Request $request)
    {
        // Lógica para salvar um novo personagem
        $request->validate([
            'nome' => 'required|string|max:64',
        ]);

        $character = new Character();
        $character->user_id = auth()->id();
        $character->name = $request->input('nome');
        // Atribua outros campos conforme necessário
        $character->save();

        return redirect()->route('app.character.charlist')->with('success', 'Personagem criado com sucesso!');
    }
    public function show($id)
    {
        $character = Character::findOrFail($id);
        if ($character->user_id !== auth()->id()) {
            return redirect()->route('site.home')->with('error', 'Acesso não autorizado.');
        }
        return view("app.character.charshow", compact("character"));
    }
    public function edit($id)
    {
        // Lógica para mostrar o formulário de edição de personagem
    }
    public function update(Request $request, $id)
    {
        // Lógica para atualizar um personagem existente
    }
    public function updateHP(Request $request, $id)
    {
        $request->validate([
            'hp_current' => 'required|integer|min:0',
        ]);
        $character = Character::findOrFail($id);
        if ($character->user_id !== auth()->id()) {
            return redirect()->route('site.home')->with('error', 'Acesso não autorizado.');
        }
        $character->pv = $request->input('hp_current');
        $character->save();

        return redirect()->route('app.character.charshow', $character->id)->with('success', 'Pontos de vida atualizados com sucesso!');
    }
    public function destroy($id)
    {
        // Lógica para deletar um personagem
    }
}
