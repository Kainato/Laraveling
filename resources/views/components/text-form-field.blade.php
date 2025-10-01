@if(!empty($label))
    <label for="{{ $name }}">{{ $label }}</label>
@endif
@if(($type ?? 'text') === 'password')
    <input type="password" name="{{ $name ?? 'Campo' }}" placeholder="{{ $placeholder ?? 'Insira um valor' }}">
@else
    <input type="{{ $type ?? 'text' }}" name="{{ $name ?? 'Campo' }}" placeholder="{{ $placeholder ?? 'Insira um valor' }}" value="{{ old($name ?? 'Campo') }}">
@endif
@error($name ?? 'Campo')
    <div style="color: red;">{{ $message }}</div>
@enderror
