{{-- inserir title --}}
<input type="text" name="{{ $name ?? 'telefone' }}" id="telefone"
    placeholder="{{ $placeholder ?? 'Insira seu telefone' }}" value="{{ $value ?? old('telefone') }}">

@error($name ?? 'telefone')
    <div style="color: red;">{{ $message }}</div>
@enderror
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var telefone = document.getElementById('telefone');
        telefone.addEventListener('input', function(e) {
            var x = telefone.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
            telefone.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });
    });
</script>
