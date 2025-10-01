@extends('layout')

@section('header')
    <h1>Listagem de Personagens</h1>
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th>Usuário mencionado</th>
                <th>Nome do personagem</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
                <tr>
                    <td>{{ $character->user->name }}</td>
                    <td>{{ $character->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <div>
        Total de personagens: {{ count($characters) }}
    </div>
    <hr>
@endsection
