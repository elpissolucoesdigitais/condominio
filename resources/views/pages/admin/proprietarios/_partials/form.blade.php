@include('pages.includes.alerts')


<div class="form-group">
    <label>Nome </label>
    <input type="text" name="nome" class="form-control" value="{{ $proprietario->nome ?? old('nome') }}">
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nascimento" class="form-control" value="{{ $proprietario->data_nascimento ?? old('data_nascimento') }}">
    </div>
    <div class="form-group col-md-4">
        <label>CPF</label>
        <input type="number" name="cpf" class="form-control" value="{{ $proprietario->cpf ?? old('cpf') }}">
    </div>

    <div class="form-group col-md-4">
        <label>RG</label>
        <input type="number" name="rg" class="form-control" value="{{ $proprietario->rg ?? old('rg') }}">
    </div>
</div>



<div class="form-group">
    <label>Logradouro </label>
    <input type="text" name="logradouro" class="form-control" value="{{ $proprietario->logradouro ?? old('logradouro') }}">
</div>

<div class="form-row">

    <div class="form-group  col-md-4">
        <label>Bairro </label>
        <input type="text" name="bairro" class="form-control" value="{{ $proprietario->bairro ?? old('bairro') }}">
    </div>

    <div class="form-group  col-md-4">
        <label>Cidade </label>
        <input type="text" name="cidade" class="form-control" value="{{ $proprietario->cidade ?? old('cidade') }}">
    </div>

    <div class="form-group  col-md-1">
        <label>UF </label>
        <input type="text" name="uf" class="form-control" value="{{ $proprietario->uf ?? old('uf') }}">
    </div>

    <div class="form-group  col-md-3">
        <label>CEP</label>
        <input type="number" name="cep" class="form-control" value="{{ $proprietario->cep ?? old('cep') }}">
    </div>
</div>

<div class="form-row">

<div class="form-group col-md-3">
    <label>Número Celular </label>
    <input type="number" name="numero_celular" class="form-control" value="{{ $proprietario->numero_celular ?? old('numero_celular') }}">
</div>

<div class="form-group col-md-9">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ $proprietario->email ?? old('email') }}">
</div>

</div>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
