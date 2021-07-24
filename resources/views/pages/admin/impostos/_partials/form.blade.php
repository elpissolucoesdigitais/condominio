@include('pages.includes.alerts')

<div class="form-group">
    <label>IPTU: </label>
    <input type="number" name="iptu" class="form-control" value="{{ $imposto->iptu ?? old('iptu') }}">
</div>

<div class="form-group">
    <label>INPC: </label>
    <input type="number" name="inpc" class="form-control" value="{{ $imposto->inpc ?? old('inpc') }}">
</div>

<div class="form-group">
    <label>Receita Federal: </label>
    <input type="number" name="receita_federal" class="form-control" value="{{ $imposto->receita_federal ?? old('receita_federal') }}">
</div>

<div class="form-group">
    <label>Rais: </label>
    <input type="number" name="rais" class="form-control" value="{{ $imposto->rais ?? old('rais') }}">
</div>

<div class="form-group">
    <label>Descrição: </label>
    <input type="text" name="descricao" class="form-control" placeholder="Nome:" value="{{ $imposto->descricao ?? old('descricao') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
