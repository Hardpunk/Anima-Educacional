<div class="row">
    <div class="col-md-12">
      <form class="needs-validation" action="{{ route('admin.setting_update') }}" method="post" novalidate>
        @csrf
        <div class="form-row">

          <div class="col-md-6 mb-3">
            <label for="interest_installment">Taxa de juros</label>
            <input type="text" class="form-control" id="interest_installment" name="interest_installment" placeholder="Ex: 1.93%" value="{{ get_settings('interest_installment')->value }}" required>
            <small id="interest_installmentHelpBlock" class="form-text text-muted">Preencha com a taxa de juros do sistema de cobrança que ira utilizar</small>
          </div>

          <div class="col-md-6 mb-3">
            <label for="api_pagarme">API Pagar.me</label>
            <input type="text" class="form-control" id="api_pagarme" name="api_pagarme" placeholder="Ex: ASKJfndjfbDJBFDKJFNJfndjfnd" value="{{ get_settings('api_pagarme')->value }}" required>
            <small id="api_pagarmeHelpBlock" class="form-text text-muted">Preencha com a taxa de juros do sistema de cobrança que ira utilizar</small>
          </div>

        </div>
        <button class="btn btn-primary" type="submit">Salvar alterações</button>
      </form>
      
      <script>
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
    </div>
</div>