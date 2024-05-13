@extends('layout')

@section('content')
    <h1>Teste</h1>

    {{-- Visualizando por with --}}
    <p>P1 = {{ $p1 }}</p>
    <p>P2 = {{ $p2 }}</p>
    <p>P3 = {{ $p3 }}</p>
    <p>Final = {{ $soma }}</p>
@endsection
