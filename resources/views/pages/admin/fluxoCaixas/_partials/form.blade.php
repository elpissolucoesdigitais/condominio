@include('pages.includes.alerts')

<div class="form-group">
    <label>Nome: </label>
    <input type="text" name="nome" class="form-control" placeholder="Nome:" value="{{ $fluxoCaixa->nome ?? old('nome') }}">
</div>

<div class="form-group">
    <label>Descrição: </label>
    <input type="text" name="descricao" class="form-control" value="{{ $fluxoCaixa->descricao ?? old('descricao') }}">
</div>

<div class="form-group">
    <label>Valor Total: </label>
    <input type="number" name="valor_total" class="form-control" value="{{ $fluxoCaixa->valor_total ?? old('valor_total') }}">
</div>

<div class="form-group">
    <label>Valor Entrada: </label>
    <input type="number" name="valor_entrada" class="form-control" value="{{ $fluxoCaixa->valor_entrada ?? old('valor_entrada') }}">
</div>

<div class="form-group">
    <label>Data Entrada:</label>
    <input type="date" name="data_entrada" class="form-control" value="{{ $fluxoCaixa->data_entrada ?? old('data_entrada') }}">
</div>

<div class="form-group">
    <label>Valor Saida: </label>
    <input type="number" name="valor_saida" class="form-control" value="{{ $fluxoCaixa->valor_saida ?? old('valor_saida') }}">
</div>

<div class="form-group">
    <label>Data Saida:</label>
    <input type="date" name="data_saida" class="form-control" value="{{ $fluxoCaixa->data_saida ?? old('data_saida') }}">
</div>
<br>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
