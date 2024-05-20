@extends('layout')

@section('header')
    <h1>Playtest</h1>
@endsection

@section('content')
    <div class="container">

        {{-- Table --}}
        <h2>Lista de clientes</h2>
        <div style="overflow-x: auto;">
            <table border="1px solid black">
                <caption style="text-align:start">
                    Tabela de informações
                </caption>

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
        </div>

        {{-- Descrições rápidas --}}
        <h2>Parâmetros da controller</h2>
        <h3>If - Else</h3>
        @if ($numero < 15)
            <p>O parâmetro {{ $numero }} é menor que 15</p>
        @else
            <p>O parâmetro {{ $numero }} é maior que 15</p>
        @endif

        {{-- List of itens --}}
        <h3>Lista de itens</h3>
        <p>Meu nome: {{ $nome }}</p>
        <p>Eu sou real? {{ $souReal ? 'Sim' : 'Não' }}</p>

        {{-- Brincando com a blade --}}
        <h3>Imprimindo dados na página</h3>
        {{ 'Imprimir texto tipo 1' }}
        <?= 'Imprimir texto tipo 2' ?>

        {{-- É assim que se insere um bloco de código de PHP puro --}}
        <h3>Código de PHP puro</h3>
        @php
            // Para comentários de uma linha
            /* Para comentário de múltiplas linhas */
            echo 'Imprimir texto tipo 3';
        @endphp

        {{-- Criando lógica com "FOR" --}}
        <h3>Lógica de looping</h3>
        @for ($i = 0; $i < 10; $i++)
            <p>Valor de i: {{ $i }}</p>
        @endfor
    </div>
@endsection
