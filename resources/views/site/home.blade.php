@extends('layout')

@section('header')
    <h1>Página inicial</h1>
@endsection

@section('content')
    <div class="column">
        <div class="leftColumn">
            <h2>Seja bem-vindo!</h2>
            <p>Este site de exemplo foi desenvolvido como parte do curso de Laravel e serve como uma vitrine do meu trabalho
                e habilidades como desenvolvedor web. Utilizando o poderoso framework Laravel, criei uma aplicação que
                demonstra várias funcionalidades e melhores práticas no desenvolvimento de software.</p>

            <h2>Próximos passos</h2>
            <p>Os próximos passos incluem a implementação de novas funcionalidades, melhorias no design e na usabilidade do
                site, e a correção de bugs e problemas de segurança. Além disso, pretendo adicionar mais conteúdo e
                informações sobre mim e sobre o meu trabalho no desenvolvimento web.</p>
        </div>
        <div class="rightColumn">
            <h2>Menu do site</h2>
            <p>Acesse sua a área restrita e conheça mais do CRUD implementado</p>
            <a href="{{ route('app.clientes') }}">
                <button>Clique aqui!</button>
            </a>
            <p>Saiba mais como se tornar um apoiador!</p>
            <a href="{{ route('app.fornecedores') }}">
                <button>Descubra!</button>
            </a>
            <p>Conheça mais sobre meus outros projetos</p>
            <a href="{{ route('app.produtos') }}">
                <button>Veja mais!</button>
            </a>
        </div>
    </div>
@endsection
