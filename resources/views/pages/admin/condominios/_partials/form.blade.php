@include('pages.includes.alerts')

<div class="form-row">
    <div class="form-group col-md-6">
        <div class="form-group">
            <label>Nome </label>
            <input type="text" name="nome" class="form-control" value="{{ $proprietario->nome ?? old('nome') }}">
        </div>
    </div>


    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Data de Criação</label>
            <input type="date" name="data_criacao" class="form-control" value="{{ $proprietario->data_nascimento ?? old('data_nascimento') }}">
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="form-group">
            <label>CPF ou CNPJ</label>
            <input type="number" name="cpf_cnpj" class="form-control" value="{{ $proprietario->cpf ?? old('cpf') }}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <div class="form-group">
            <label>Logradouro </label>
            <input type="text" name="logradouro" class="form-control" value="{{ $proprietario->logradouro ?? old('logradouro') }}">
        </div>
    </div>

    <div class="form-group col-md-6">
        <div class="form-group">
            <label>Bairro </label>
            <input type="text" name="bairro" class="form-control" value="{{ $proprietario->bairro ?? old('bairro') }}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Cidade </label>
            <input type="text" name="cidade" class="form-control" value="{{ $proprietario->cidade ?? old('cidade') }}">
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="form-group">
            <label>UF </label>
            <input type="text" name="uf" class="form-control" value="{{ $proprietario->uf ?? old('uf') }}">
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="form-group">
            <label>CEP</label>
            <input type="number" name="cep" class="form-control" value="{{ $proprietario->cep ?? old('cep') }}">
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Número Celular </label>
            <input type="number" name="numero_celular" class="form-control" value="{{ $proprietario->fone_celular ?? old('fone_celular') }}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-7">
        <div class="form-group">
            <label>email</label>
            <input type="email" name="email" class="form-control" value="{{ $proprietario->email ?? old('email') }}">
        </div>
    </div>

    <div class="form-group col-md-5">
        <label>Proprietário</label>
        <div class="form-group">
            <div class="dropdown">
                <select class="btn btn-success dropdown-toggle" name="proprietario_id" id="inputbloco_id">
                    <option value="">-</option>
                        @foreach ($proprietarios as $proprietario)
                        <option name="{{$proprietario->id}}" value="{{$proprietario->id}}">
                            Proprietário - {{$proprietario->nome}}
                        </option>
                        @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
<br>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
