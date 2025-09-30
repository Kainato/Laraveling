@extends('layout')

@section('header')
    <h1>Cadastre-se</h1>
@endsection

@section('content')
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

    <form method="POST" action="{{ route('app.auth.cadastro.process') }}">
        @csrf
        <x-text-form-field label="Nome de usuário" name="nome" value="{{ old('nome') }}" placeholder="Insira seu nome" />
        <hr>
        <x-text-form-field label="Senha" name="password" value="{{ old('password') }}" placeholder="Insira sua senha" />
        <hr>
        <x-text-form-field label="E-mail" name="email" value="{{ old('email') }}" placeholder="Insira seu e-mail" />
        <hr>
        <x-text-form-field type="number" label="Idade" name="idade" value="{{ old('idade') }}" placeholder="Insira sua idade" />
        <hr>
        <x-btn-submit>Salvar</x-btn-submit>
    </form>
    <hr>
    <p>Já tem uma conta? <a href="{{ route('app.auth.login') }}">Faça login agora mesmo!</a></p>
@endsection
