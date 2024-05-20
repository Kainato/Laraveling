@extends('layout')

@section('header')
    <div class="headerContainer">
        <h1>Fornecedores</h1>
    </div>
@endsection

@section('content')
    {{-- O comando (@dd) serve para imprimir na tela o que tem dentro da variável que importamos da controller --}}
    {{-- @dd($fornecedores) --}}
    <div class="container">
        <h2>Lista de fornecedores</h2>

        <div style="overflow-x: auto;">
            <table border="1px solid black">
                <caption style="text-align:start">
                    {{-- unless: Executa algo se o retorno for true  --}}
                    @unless (count($fornecedores) > 0)
                        <p>Não existem fornecedores cadastrados</p>
                    @endunless
                    @isset($fornecedores)
                        {{-- isset: Retorna true se a variável estiver definida  --}}
                        <p>Existem {{ count($fornecedores) }} fornecedores cadastrados</p>
                    @endisset
                </caption>

                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Status</th>
                        <th>Telefone</th>
                    </tr>
                </thead>

                @foreach ($fornecedores as $fornecedor)
                    <tr>
                        <td>{{ $fornecedor['nome'] }}</td>
                        <td>{{ $fornecedor['status'] }}</td>
                        @empty($fornecedor['telefone'])
                            {{-- isset: Retorna true se a variável estiver vazia  --}}
                            <td>Telefone não informado</td>
                        @endempty
                        @isset($fornecedor['telefone'])
                            <td>{{ $fornecedor['telefone'] }}</td>
                        @endisset
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
