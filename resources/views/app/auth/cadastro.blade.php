@extends('layout')

@section('header')
    <h1>Cadastre-se</h1>
@endsection

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; padding: 10%">
        <form method="POST" action="{{ route('app.auth.cadastro.process') }}" style="width: 100%; max-width: 600px;">
            @csrf
            <x-text-form-field label="Nome de usuário" name="nome" value="{{ old('nome') }}"
                placeholder="Insira seu nome" />
            <hr>
            <x-text-form-field label="E-mail" name="email" value="{{ old('email') }}" placeholder="Insira seu e-mail" />
            <hr>
            <x-text-form-field label="Senha" name="password" type="password" value="{{ old('password') }}" placeholder="Insira sua senha" />
            <hr>
            <x-btn-submit>Salvar</x-btn-submit>
            <p>Já tem uma conta? <a href="{{ route('app.auth.login') }}">Faça login agora mesmo!</a></p>
        </form>
    </div>
@endsection
