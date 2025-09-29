{{-- filepath: resources/views/app/user/usercreate.blade.php --}}
@extends('layout')

@section('header')
    <h1>Adicionar usuário</h1>
@endsection

@section('content')
    {{-- Mensagem geral de erro --}}
    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <strong>Por favor, corrija os erros abaixo:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('app.user.store') }}">
        @csrf
        <x-text-form-field name="nome" value="{{ old('nome') }}" placeholder="Insira seu nome" />
        <hr>
        <x-text-form-field name="password" value="{{ old('password') }}" placeholder="Insira sua senha" />
        <hr>
        <x-text-form-field name="email" value="{{ old('email') }}" placeholder="Insira seu e-mail" />
        <hr>
        <x-dropdown name="situacao" label="Situação do usuário" :options="['true' => 'Ativo', 'false' => 'Inativo']" />
        <hr>
        <x-text-form-field type="number" name="idade" value="{{ old('idade') }}" placeholder="Insira sua idade" />
        <hr>
        <x-text-form-field-phone name="telefone" value="{{ old('telefone') }}" placeholder="Insira seu telefone" />
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var telefone = document.getElementById('telefone');
                telefone.addEventListener('input', function(e) {
                    var x = telefone.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
                    telefone.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
                });
            });
        </script>
        <hr>
        <button type="submit">Salvar</button>
    </form>
@endsection
