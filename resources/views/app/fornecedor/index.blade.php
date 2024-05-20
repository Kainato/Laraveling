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
            <table border="1px solid white">
                <caption>
                    @isset($fornecedores)
                        {{-- isset: Retorna true se a variável estiver definida  --}}
                        <p>Existem {{ count($fornecedores) }} fornecedores cadastrados</p>
                    @endisset
                </caption>

                <thead>
                    <tr>
                        <th>Índice</th>
                        <th>Nome</th>
                        <th>Status</th>
                        <th>Telefone</th>
                        <th>CNPJ</th>
                        <th>Estado</th>
                    </tr>
                </thead>

                {{-- FOR ELSE X FOR EACH
                "@forelse" é a mesma coisa que "@foreach", porém existe a condição para indicarque o foreach possa estar indo em uma variável vazia

                @foreach ($fornecedores as $fornecedor) --}}
                @forelse ($fornecedores as $indice => $fornecedor)
                    <tr>
                        <td>{{ $indice }}</td>

                        <td>{{ $fornecedor['nome'] }}</td>

                        <td>{{ $fornecedor['status'] }}</td>

                    @empty($fornecedor['telefone'])
                        {{-- isset: Retorna true se a variável estiver vazia  --}}
                        <td>Telefone não informado</td>
                    @endempty

                    @isset($fornecedor['telefone'])
                        <td>{{ $fornecedor['telefone'] }}</td>
                    @endisset

                    <td>{{ $fornecedor['cnpj'] ?? 'CNPJ não informado' }}</td>

                    <td>{{ $fornecedor['estado'] ?? 'Estado não informado' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Não existem fornecedores cadastrados</td>
                </tr>
            @endforelse
        </table>
    </div>
</div>
<hr style="border: 1px solid white;">
<div class="container">
    <h2>Validador de CNPJs</h2>
    @php $i = 0; @endphp
    {{-- while: Executa algo enquanto a condição for verdadeira  --}}
    @while ($i < count($fornecedores))
        @isset($fornecedores[$i]['cnpj'])
            <a href="https://www.contabilizei.com.br/consulta-cnpj-cartao/resultado/?cnpj={{ $fornecedores[$i]['cnpj'] }}">
                <p>O CNPJ "{{ $fornecedores[$i]['cnpj'] }}" do fornecedor "{{ $fornecedores[$i]['nome'] }}" existe?</p>
            </a>
        @endisset
        @php $i++; @endphp
    @endwhile

    {{-- unless: Executa algo se o retorno for true  --}}
    @unless (count($fornecedores) > 0)
        <p>Não existem fornecedores cadastrados</p>
    @endunless
</div>
@endsection
