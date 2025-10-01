@extends('layout')

@section('header')
    <h1>{{ $character->name }}</h1>
@endsection

@section('content')
    <p><strong>Classe:</strong> {{ $character->class->name ?? '-' }}</p>
    <p><strong>Origem:</strong> {{ $character->origin->name ?? '-' }}</p>
    <p><strong>Trilha:</strong> {{ $character->trail->name ?? '-' }}</p>
@endsection
