<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src example.com;"> --}}
    <style>
        body {
            /* Estilo da fonte da página: Fonte escolhida, Se não tiver a fonte anterior na máquina == Escolher esta aqui ou em diante */
            font-family: Arial, Helvetica, sans-serif;
            /* Cor de fundo da página */
            background-color: #241747;
            /* Cor do texto da página */
            color: #ffffff;
            /* Centralização do texto */
            text-align: initial;
            /* Padding da página */
            padding: 0px;
            margin: 0px;
        }

        table,
        th,
        td {
            border: 1px solid white;
        }

        header {
            background-color: #d84a51;
            color: white;
            padding: 8px 0;
            text-align: start;
            position: sticky;
        }

        footer {
            background-color: #d84a51;
            color: white;
            text-align: center;
            /* position: fixed; */
            width: 100%;
            bottom: 0;
            padding: 4px 0;
        }

        .headerContainer {
            width: 90%;
            margin: auto;
            overflow: hidden;
            padding: 4px 0;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
        }

        .profile-picture {
            float: left;
            margin-right: 20px;
        }

        .profile-picture img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .content {
            overflow: hidden;
        }

        .content h1 {
            margin-top: 0;
        }

        .content p {
            line-height: 1.6;
        }

        a {
            color: #ED5159; /* cor padrão do link */
            text-decoration: none; /* remover sublinhado */
        }
        a:visited {
            color: #ED5159; /* cor do link visitado */
        }
        a:hover {
            color: #BC181F; /* cor do link ao passar o mouse */
            text-decoration: underline; /* sublinhado ao passar o mouse */
        }
        a:active {
            color: #BC181F; /* cor do link ativo (clicado) */
        }
    </style>

    <title>Learning Laravel</title>
</head>

<header>
    @yield('header')
</header>

<body>
    @yield('content')
</body>

<footer>
    <p>&copy; 2024 | Kainato | Laraveling. Todos os direitos reservados.</p>
</footer>
