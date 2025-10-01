@extends('layout')

@section('header')
    <h1>Criação de personagem</h1>
@endsection

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; padding: 10%">
        <form method="POST" action="{{ route('app.character.charstore') }}" style="width: 100%; max-width: 600px;">
            @csrf
            <x-text-form-field label="Nome do seu personagem" name="nome" value="{{ old('nome') }}"
                placeholder="Insira o nome do seu personagem" />
            <hr>
            <x-btn-submit>Salvar</x-btn-submit>
        </form>
    </div>
@endsection
