<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            /* Estilo da fonte da página: Fonte escolhida, Se não tiver a fonte anterior na máquina == Escolher esta aqui ou em diante */
        }
    </style>

    <title>Test Programming</title>
</head>

<body>
    <h1>Hello World</h1>

    @if (10 < 15)
        <p>10 is less than 15</p>
    @endif

    <p>{{ $nome }}</p>
    @if ($nomezinho == 'Caio')
        <p>Olá Caio!!!</p>
    @endif
    <p>{{ $proximaPaginaRecebeIsso }}</p>
</body>
