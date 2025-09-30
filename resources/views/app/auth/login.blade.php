@extends('layout')

@section('header')
    <h1>Faça seu login</h1>
@endsection

@section('content')
    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
        <hr>
    @endif

    <div style="display: flex; justify-content: center; align-items: center; padding: 10%">
        <form method="POST" action="{{ route('app.auth.login.process') }}" style="width: 100%; max-width: 600px;">
            @csrf
            <x-text-form-field label="E-mail" name="email" value="{{ old('email') }}" placeholder="Insira seu e-mail" />
            <hr>
            <x-text-form-field label="Senha" name="password" type="password" placeholder="Insira sua senha" />
            <hr>
            <x-btn-submit>Entrar</x-btn-submit>
            <p>Não tem uma conta? <a href="{{ route('app.auth.cadastro') }}">Cadastre-se agora mesmo!</a></p>
        </form>
    </div>
@endsection
