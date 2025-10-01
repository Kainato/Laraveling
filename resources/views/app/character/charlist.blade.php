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
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $char)
                <tr>
                    <td>{{ $char->name }}</td>
                    <td>{{ $char->class->name ?? '-' }}</td>
                    <td>{{ $char->origin->name ?? '-' }}</td>
                    <td>{{ $char->trail->name ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <div style="display: flex; justify-content: space-between">
        <span>Total de personagens: {{ count($characters) }}</span>
        <button onclick="window.location.href='{{ route('app.character.charcreate') }}'">Criar novo personagem</button>
    </div>
    <hr>
@endsection
