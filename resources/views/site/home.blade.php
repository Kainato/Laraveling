@extends('layout')

@section('header')
    <h1>Página inicial</h1>
@endsection

@section('content')
    <div class="column">
        <div class="sidebar">
            <h2>Seja bem-vindo!</h2>
            <p>Este site de exemplo foi desenvolvido como parte do curso de Laravel e serve como uma vitrine do meu trabalho
                e habilidades como desenvolvedor web. Utilizando o poderoso framework Laravel, criei uma aplicação que
                demonstra várias funcionalidades e melhores práticas no desenvolvimento de software.</p>
            <a href="{{ route('laravel') }}">
                → Documentação do laravel
            </a>

            <h2>Próximos passos</h2>
            <p>Os próximos passos incluem a implementação de novas funcionalidades, melhorias no design e na usabilidade do
                site, e a correção de bugs e problemas de segurança. Além disso, pretendo adicionar mais conteúdo e
                informações sobre mim e sobre o meu trabalho no desenvolvimento web.</p>
        </div>
        <div class="content">
            <h2>🚀 Sobre mim</h2>
            <ul>
                <li>🔭 Atualmente trabalhando na Teatech expandindo minha visão além do código, aplicando meus conhecimentos de gestão de pessoas para liderar e colaborar melhor em equipe.</li>
                <li>📘 Atualmente estudando na UNIT | Universidade Tiradentes</li>
                <li>🎯 Objetivo de carreira atual: Iniciar minha trajetória profissional no exterior, contribuindo com soluções criativas e escaláveis em projetos de impacto.</li>
                <li>⚡ Curiosidade: Adoro testar ferramentas novas e costumo perder horas me aventurando em novas ideias e features</li>
            </ul>
        </div>
    </div>
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
