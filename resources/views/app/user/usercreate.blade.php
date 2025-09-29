@extends('layout')

@section('header')
    <h1>Adicionar usuário</h1>
@endsection

@section('content')
    <input type="text" name="email" placeholder="E-mail">
    <hr>
    <select>
        <option disabled selected>Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <hr>
    <textarea name="mensagem" placeholder="Insira a sua mensagem"></textarea>
@endsection
