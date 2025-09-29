{{-- filepath: resources/views/components/dropdown.blade.php --}}
<div>
    @if(!empty($label))
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <select name="{{ $name }}" id="{{ $name }}">
        <option disabled selected>{{ $label ?? 'Selecione uma opção' }}</option>
        @foreach($options as $key => $value)
            <option value="{{ $key }}" {{ old($name) == $key ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
    </select>
    @error($name)
        <div style="color: red;">{{ $message }}</div>
    @enderror
</div>
