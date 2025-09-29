@extends('layout')

@section('header')
    <h1>Listagem de Usuários</h1>
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <div>
        Total de usuários: {{ count($users) }}
    </div>
    <hr>
    <button onclick="window.location='{{ route('app.user.usercreate') }}'">Adicionar Usuário</button>
@endsection
