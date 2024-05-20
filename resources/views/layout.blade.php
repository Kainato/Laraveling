<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* ---------------------------------------------------------------------
        // ---------------------------- CSS Projeto ----------------------------
        // ------------------------------------------------------------------ */
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* ---------------------------------------------------------------------
        // ---------------------------- CSS  Padrão ----------------------------
        // ------------------------------------------------------------------ */

        body {
            /* Estilo da fonte da página: Fonte escolhida, Se não tiver a fonte anterior na máquina == Escolher esta aqui ou em diante */
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

        header {
            background-color: #d84a51;
            color: white;
            padding: 8px 0;
            text-align: start;
            position: sticky;
        }

        hr {
            margin: 10px 0;
            border: none;
        }

        footer {
            background-color: #d84a51;
            color: white;
            text-align: center;
            position: relative;
            width: 100%;
            bottom: 0;
            padding: 2px 0;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        table,
        thead,
        td {
            width: 100%;
            border: 1px solid white;
            border-collapse: collapse;
            vertical-align: center;
        }

        thead {
            background-color: #d84a51;
            height: 50px;
            text-align: center;
        }

        td {
            padding: 10px;
            text-align: start;
        }

        tr:nth-child(even) {
            background-color: #160e2b;
        }

        tr:hover {
            background-color: #d84a51;
        }

        a {
            color: #ED5159;
            /* cor padrão do link */
            text-decoration: none;
            /* remover sublinhado */
        }

        a:visited {
            color: #ED5159;
            /* cor do link visitado */
        }

        a:hover {
            color: #BC181F;
            /* cor do link ao passar o mouse */
            text-decoration: underline;
            /* sublinhado ao passar o mouse */
        }

        a:active {
            color: #BC181F;
            /* cor do link ativo (clicado) */
        }

        input,
        select,
        textarea {
            width: 80%;
            padding: 10px;
            border: 2px solid #d84a51;
            border-radius: 12px;
            font-size: 16px;
            overflow: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        input:focus,
        textarea:focus {
            border-radius: 12px;
            border-color: #ED5159;
        }

        select:focus {
            border-color: #ED5159;
            background-color: #ED5159;
            color: #ffffff;
        }

        select::-ms-expand {
            display: none;
        }

        select option {
            background-color: #ffffff;
            color: #000000;
        }

        button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #d84a51;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #BC181F;
        }

        /* ---------------------------------------------------------------------
        // ---------------------------- CSS Classes ----------------------------
        // ------------------------------------------------------------------ */

        .headerContainer {
            width: 100%;
            margin: auto;
            overflow: hidden;
            padding: 4px 0;
        }

        .headerContainer h1 {
            float: left;
            margin-left: 40px;
        }

        .headerMenu {
            float: right;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-right: 40px;
        }

        .headerMenu ul {
            list-style-type: none;
            overflow: hidden;
        }

        .headerMenu li {
            float: left;
        }

        .headerMenu li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .headerMenu li a:hover {
            background-color: #241747;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
        }

        .column {
            width: 90%;
            height: 100%;
            min-height: 768px;
            margin: auto;
            align-content: center;
            display: flex;
            justify-content: space-between;
        }

        .leftColumn {
            float: left;
            width: 60%;
            height: 100%;
        }

        .rightColumn {
            padding: 0px 40px;
            float: right;
            width: 40%;
            height: 100%;
        }

        .rightColumn a {
            text-decoration: none;
            flex-direction: column;
            justify-content: end;
        }

        .rowButtonsContainer {
            width: 80%;
            margin: auto;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
            padding: 0;
        }

        .formsContainer {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 0px;
            display: flex;
            flex-direction: column;
            align-items: center;
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
    </style>
</head>

<header>
    <div class="headerContainer">
        @yield('header')
        <div class="headerMenu">
            <ul>
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
                <li><a href="{{ route('site.login') }}">Login</a></li>
            </ul>
        </div>
    </div>
</header>

<body>
    @yield('content')
    <hr>
</body>

<footer>
    <p>&copy; 2024 | Kainato - Laraveling | Todos os direitos reservados.</p>
</footer>
