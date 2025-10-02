@extends('layout')

@section('header')
    <h1>{{ $character->name }}</h1>
@endsection

@section('content')
    @php
        $hp_max = ($character->class->initial_pv ?? 0) + ($character->force ?? 0);
        $hp_current = $character->pv ?? 0;
        $hp_percent = $hp_max > 0 ? ($hp_current / $hp_max) * 100 : 0;
    @endphp
    <div style="display: flex; align-items: center; gap: 24px">
        <div>
            <strong>Vida Atual / Máxima</strong>
            <div style="background: #fff; width: 300px; height: 24px; border-radius: 8px; overflow: hidden;">
                <div style="background: green; width: {{ $hp_percent }}%; height: 100%; transition: width 0.3s;"></div>
            </div>
            <form method="POST" action="{{ url('/characters/' . $character->id . '/update-hp') }}"
                style="display: flex; gap: 0px; align-items: start;">
                @csrf
                <div style="display: flex; gap: 4px">
                    <script>
                        const input = document.getElementById('hp-current-input');
                        const btn = document.getElementById('save-hp-btn');
                        const original = input.value;
                        input.addEventListener('input', function() {
                            if (input.value !== original) {
                                btn.style.opacity = 1;
                                btn.style.pointerEvents = 'auto';
                            } else {
                                btn.style.opacity = 0;
                                btn.style.pointerEvents = 'none';
                            }
                        });
                    </script>
                    <input type="number" name="hp_current" value="{{ $hp_current }}" min="0"
                        max="{{ $hp_max }}" style="width: 60px; height: 20px;">
                    <span><strong>/ {{ $hp_max }}</strong></span>
                </div>
        </div>
        </form>
    </div>
    <hr>
    <p><strong>Classe:</strong> {{ $character->class->name ?? '-' }}</p>
    <p><strong>Origem:</strong> {{ $character->origin->name ?? '-' }}</p>
    <p><strong>Trilha:</strong> {{ $character->trail->name ?? '-' }}</p>
    <hr>
    <p><strong>Força:</strong> {{ $character->strength ?? '0' }}</p>
    <p><strong>Agilidade:</strong> {{ $character->agility ?? '0' }}</p>
    <p><strong>Intelecto:</strong> {{ $character->intellect ?? '0' }}</p>
    <p><strong>Presença:</strong> {{ $character->presence ?? '0' }}</p>
    <p><strong>Vigor:</strong> {{ $character->force ?? '0' }}</p>
    <hr>
@endsection
