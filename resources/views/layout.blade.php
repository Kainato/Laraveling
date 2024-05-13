<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            /* Estilo da fonte da página: Fonte escolhida, Se não tiver a fonte anterior na máquina == Escolher esta aqui ou em diante */
            font-family: Tahoma, Arial, Helvetica, sans-serif;
            /* Cor de fundo da página */
            background-color: #111827;
            /* Cor do texto da página */
            color: #ffffff;
            /* Centralização do texto */
            text-align: initial;
            /* Padding da página */
            padding-top: 4px;
            padding-bottom: 8px;
            padding-left: 20px;
            padding-right: 20px;
        }

        table,
        th,
        td {
            border: 1px solid white;
        }
    </style>

    <title>Learning Laravel</title>
</head>

<body>
    @yield('content')
</body>
