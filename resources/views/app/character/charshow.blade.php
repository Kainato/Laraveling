@extends('layout')

@section('header')
    <h1>{{ $character->name }}</h1>
@endsection

@section('content')
    <p><strong>Classe:</strong> {{ $character->class->name ?? '-' }}</p>
    <p><strong>Origem:</strong> {{ $character->origin->name ?? '-' }}</p>
    <p><strong>Trilha:</strong> {{ $character->trail->name ?? '-' }}</p>
    <hr>
    <p><strong>Força:</strong> {{ $character->strength ?? '0' }}</p>
    <p><strong>Agilidade:</strong> {{ $character->agility ?? '0' }}</p>
    <p><strong>Intelecto:</strong> {{ $character->intellect ?? '0' }}</p>
    <p><strong>Presença:</strong> {{ $character->presence ?? '0' }}</p>
    <p><strong>Vigor:</strong> {{ $character->force ?? '0' }}</p>
@endsection
