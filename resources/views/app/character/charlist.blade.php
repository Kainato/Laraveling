@extends('layout')

@section('header')
    <h1>Listagem de Personagens</h1>
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th>Nome do personagem</th>
                <th>Classe</th>
                <th>Origem</th>
                <th>Trilha</th>
                <th>Força</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
                <tr>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->class->name ?? '-' }}</td>
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
