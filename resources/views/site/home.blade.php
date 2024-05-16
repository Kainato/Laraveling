@extends('layout')

@section('header')
    <div class="headerContainer">
        <h1>Página inicial</h1>
    </div>
@endsection

@section('content')
    {{-- ------------------------------------------------------------------ --}}
    <div class="container">
        <h2>Menu inicial</h2>
    </div>
    <div class="rowButtonsContainer">
        <a href="{{ route('site.home') }}">
            <button>Página inicial</button>
        </a>
        <a href="{{ route('site.sobre') }}">
            <button>Sobre</button>
        </a>
        <a href="{{ route('site.contato') }}">
            <button>Contato</button>
        </a>
        <a href="{{ route('site.login') }}">
            <button>Login</button>
        </a>
    </div>
    {{-- ------------------------------------------------------------------ --}}
    <div class="container">
        <h2>Menu do app</h2>
    </div>
    <div class="rowButtonsContainer">
        <a href="{{ route('app.clientes') }}">
            <button>Clientes</button>
        </a>
        <a href="{{ route('app.fornecedores') }}">
            <button>Fornecedores</button>
        </a>
        <a href="{{ route('app.produtos') }}">
            <button>Produtos</button>
        </a>
    </div>
    {{-- ------------------------------------------------------------------ --}}
    <div class="container">
        <h2>Menu extra</h2>
    </div>

    <div class="rowButtonsContainer">
        <a href="{{ route('playtest') }}">
            <button>Playtest</button>
        </a>
        <a href="{{ route('laravel') }}">
            <button>Documentação do laravel</button>
        </a>
    </div>
    {{-- ------------------------------------------------------------------ --}}
    <div class="container">
        <h2>Menu de aprendizado</h2>
    </div>
    <div class="rowButtonsContainer">
        <a href="/test/10/20" disabled selected>
            <button>Teste array associativo</button>
        </a>
        <a href="/test/500" disabled selected>
            <button>Teste compact</button>
        </a>
        <a href="/test/42/69/7" disabled selected>
            <button>Teste with</button>
        </a>
    </div>
    <hr>
    <div class="rowButtonsContainer">
        <a href="{{ route('site.rota2') }}">
            <button>Teste redirecionamento</button>
        </a>
    </div>
    <hr>
    <div class="rowButtonsContainer">
        <a href="/parametros/1" disabled selected>
            <button>Teste parametros 1</button>
        </a>
        <a href="/parametros/1/Caio" disabled selected>
            <button>Teste parametros 2</button>
        </a>
        <a href="/parametros/1/Caio/Hello_World" disabled selected>
            <button>Teste parametros 3</button>
        </a>
    </div>
@endsection
