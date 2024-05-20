@extends('layout')

@section('content')
    {{-- Table --}}
    <h1>Página de Playtest</h1>

    <h2>Lista de clientes</h2>
    <table border="1px solid black">
        <caption style="text-align:start">
            Tabela de informações
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
    <h2>Parâmetros da controller</h2>
    @if ($numero < 15)
        <p>O parâmetro {{ $numero }} é menor que 15</p>
    @else
        <p>O parâmetro {{ $numero }} é maior que 15</p>
    @endif

    {{-- List of itens --}}
    <p>Meu nome: {{ $nome }}</p>
    <p>Eu sou real? {{ $souReal ? 'Sim' : 'Não' }}</p>

    {{-- Brincando com a blade --}}
    {{ 'Imprimir texto tipo 1' }}
    <?= 'Imprimir texto tipo 2' ?>

    {{-- É assim que se insere um bloco de código de PHP puro --}}
    @php
        // Para comentários de uma linha
        /* Para comentário de múltiplas linhas */
        echo 'Imprimir texto tipo 3';
    @endphp
@endsection
