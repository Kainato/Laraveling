@extends('layout')

@section('header')
    <h1>Página inicial</h1>
@endsection

@section('content')
    <h2>Menu</h2>
    <ul>
        <li>
            <a href="{{ route('site.home') }}">
                <button>Página inicial</button>
            </a>
        </li>
        <hr>
        <li>
            <a href="{{ route('site.sobre') }}">
                <button>Sobre</button>
            </a>
        </li>
        <hr>
        <li>
            <a href="{{ route('site.contato') }}">
                <button>Contato</button>
            </a>
        </li>
        <hr>
        <li>
            <a href="{{ route('site.login') }}">
                <button>Login</button>
            </a>
        </li>
        <hr>
    </ul>

    <h3>Menu do app</h3>
    <ul>
        <li>
            <a href="{{ route('app.clientes') }}">
                <button>Clientes</button>
            </a>
        </li>
        <hr>
        <li>
            <a href="{{ route('app.fornecedores') }}">
                <button>Fornecedores</button>
            </a>
        </li>
        <hr>
        <li>
            <a href="{{ route('app.produtos') }}">
                <button>Produtos</button>
            </a>
        </li>
    </ul>

    <h3>Menu Extra</h3>
    <ul>
        <li>
            <a href="{{ route('playtest') }}">
                <button>Playtest</button>
            </a>
        </li>
        <hr>
        <li>
            <a href="{{ route('laravel') }}">
                <button>Documentação do laravel</button>
            </a>
        </li>
    </ul>
@endsection
