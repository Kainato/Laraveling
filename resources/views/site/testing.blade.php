@extends('layout')

@section('content')
    {{-- Heading --}}
    <h1> Página de testes</h1>

    {{-- Row of buttons --}}

    <div style="display:flex;">
        <hr>
        <div>
            <a href="{{ route('laravel') }}">
                <button>Documentação do laravel</button>
            </a>
        </div>
        <hr>
    </div>

    {{-- Table --}}
    <table border="1px solid black">
        <caption>
            Lista de pessoas
        </caption>
        <colgroup> {{-- Define a largura das colunas --}}
            <col style="width: 70%">
            <col style="width: 30%">
        </colgroup>
        <thead style="vertical-align:center">
            <tr style="height:50px">
                <th>Nome</th>
                <th>Idade</th>
            </tr>
        </thead>
        @foreach ($pessoas as $pessoa)
            <tr>
                <td>{{ $pessoa->nome }}</td>
                <td>{{ $pessoa->idade }}</td>
            </tr>
        @endforeach
    </table>

    {{-- Descrições rápidas --}}
    <p>Este é um parágrafo de teste</p>
    @if ($numero < 15)
        <p>{{ $numero }} é menor que 15</p>
    @else
        <p>{{ $numero }} é maior que 15</p>
    @endif

    {{-- List of itens --}}
    <p>Meu nome: {{ $nome }}</p>
    <p>Eu sou real? {{ $souReal ? 'Sim' : 'Não' }}</p>
@endsection
