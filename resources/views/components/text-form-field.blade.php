@if(!empty($label))
    <label for="{{ $name }}">{{ $label }}</label>
@endif
<input type="{{ $type ?? 'text' }}" name="{{ $name ?? 'Campo' }}"
    placeholder="{{ $placeholder ?? 'Insira um valor' }}" value="{{ old($name ?? 'Campo') }}">
@error($name ?? 'Campo')
    <div style="color: red;">{{ $message }}</div>
@enderror
