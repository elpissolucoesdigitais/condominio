@include('pages.includes.alerts')

<div class="form-group">
    <label>Status: </label>
    <input type="text" name="status" class="form-control" placeholder="Nome:" value="{{ $controlePagamento->status ?? old('status') }}">
</div>

<div class="form-group">
    <label>Total Aberto: </label>
    <input type="number" name="total_aberto" class="form-control" value="{{ $controlePagamento->total_aberto ?? old('total_aberto') }}">
</div>

<div class="form-group">
    <label>Total Pago: </label>
    <input type="number" name="total_pago" class="form-control" value="{{ $controlePagamento->total_pago ?? old('total_pago') }}">
</div>

<div class="form-group">
    <label>Total a Pagar: </label>
    <input type="number" name="total_a_pagar" class="form-control" value="{{ $controlePagamento->total_a_pagar ?? old('total_a_pagar') }}">
</div>

<div class="form-group">
    <label>Multas: </label>
    <input type="number" name="multas" class="form-control" value="{{ $controlePagamento->multas ?? old('multas') }}">
</div>

<div class="form-group">
    <label>Outros: </label>
    <input type="number" name="outros" class="form-control" placeholder="" value="{{ $controlePagamento->outros ?? old('outros') }}">
</div>

<div class="form-group">
    <label>Observações: </label>
    <input type="text" name="observacoes" class="form-control" placeholder="" value="{{ $controlePagamento->observacoes ?? old('observacoes') }}">
</div>

<br>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
