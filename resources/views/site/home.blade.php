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
                Documentação do laravel
            </a>

            <h2>Próximos passos</h2>
            <p>Os próximos passos incluem a implementação de novas funcionalidades, melhorias no design e na usabilidade do
                site, e a correção de bugs e problemas de segurança. Além disso, pretendo adicionar mais conteúdo e
                informações sobre mim e sobre o meu trabalho no desenvolvimento web.</p>
        </div>
        <div class="content">
            <h2>What is Lorem Ipsum?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
@endsection
