<button type="submit" id="btnSalvar">
    <span id="btnText">{{ $slot ?? 'Salvar' }}</span>
    <span id="btnLoading" style="display:none;">Enviando...</span>
</button>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.querySelector('form');
        var btnSalvar = document.getElementById('btnSalvar');
        var btnText = document.getElementById('btnText');
        var btnLoading = document.getElementById('btnLoading');
        if(form && btnSalvar) {
            form.addEventListener('submit', function() {
                btnSalvar.disabled = true;
                btnText.style.display = 'none';
                btnLoading.style.display = 'inline';
            });
        }
    });
</script>
