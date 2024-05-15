@extends('layout')

@section('header')
    <div class="headerContainer">
        <h1>Contato</h1>
    </div>
@endsection

@section('content')
    <div class="formsContainer">
        <h2>Fale comigo!</h2>
        <p>Se você tiver alguma dúvida, sugestão ou crítica, por favor, entre em contato comigo através do formulário
            abaixo:</p>
        <hr>
        <input type="text" name="nome" placeholder="Nome">
        <hr>
        <input type="text" name="telefone" placeholder="Telefone">
        <hr>
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
        <hr>
        <button type="submit">Enviar</button>
    </div>
@endsection
