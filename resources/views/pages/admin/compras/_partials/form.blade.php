@include('pages.includes.alerts')

<div class="form-group">
    <label>Título</label>
    <input type="text" name="titulo" class="form-control" value="{{ $compra->titulo ?? old('titulo') }}">
</div>

<div class="form-group">
    <label>Produto </label>
    <input type="text" name="produto" class="form-control" value="{{ $compra->produto ?? old('produto') }}">
</div>
<div class="form-group">
    <label>Observação </label>
    <input type="text" name="observacao" class="form-control" value="{{ $compra->observacao ?? old('observacao') }}">
</div>

<div class="form-group">
    <label>Valor </label>
    <input type="text" name="valor" class="form-control" value="{{ $compra->valor ?? old('valor') }}">
</div>

<div class="form-group">
    <label>Quantidade </label>
    <input type="text" name="quantidade" class="form-control" value="{{ $compra->quantidade ?? old('quantidade') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
