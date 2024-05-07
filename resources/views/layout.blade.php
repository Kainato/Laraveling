<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            /* Estilo da fonte da página: Fonte escolhida, Se não tiver a fonte anterior na máquina == Escolher esta aqui ou em diante */
            font-family: 'Courier New', Courier, monospace;
            /* Cor de fundo da página */
            background-color: #111827;
            /* Cor do texto da página */
            color: #ffffff;
            /* Centralizar o texto */
            text-align: initial;
        }
    </style>

    <title>Learning Laravel</title>
</head>

<body>
    @yield('content')
</body>
