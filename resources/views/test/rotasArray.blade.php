@extends('layout')

@section('content')
    <h1>Teste</h1>

    {{-- Visualizando por array associativo --}}
    <p>Valor 1 = {{ $x }}</p>
    <p>Valor 2 = {{ $y }}</p>
    <p>Soma dos valores = {{ $z }}</p>
@endsection
