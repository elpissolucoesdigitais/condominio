@include('pages.includes.alerts')

<div class="form-group">
    <label>Nome: </label>
    <input type="text" name="nome" class="form-control" placeholder="Nome:" value="{{ $funcionario->nome ?? old('nome') }}">
</div>

<div class="form-group">
    <label>Data de Nascimento</label>
    <input type="date" name="data_nascimento" class="form-control" value="{{ $funcionario->data_nascimento ?? old('data_nascimento') }}">
</div>

<div class="form-group">
    <label>CPF</label>
    <input type="number" name="cpf" class="form-control" value="{{ $funcionario->cpf ?? old('cpf') }}">
</div>

<div class="form-group">
    <label>RG</label>
    <input type="number" name="rg" class="form-control" value="{{ $funcionario->rg ?? old('rg') }}">
</div>

<div class="form-group">
    <label>Logradouro: </label>
    <input type="text" name="logradouro" class="form-control" placeholder="Nome:" value="{{ $funcionario->logradouro ?? old('logradouro') }}">
</div>

<div class="form-group">
    <label>Bairro: </label>
    <input type="text" name="bairro" class="form-control" placeholder="Nome:" value="{{ $funcionario->bairro ?? old('bairro') }}">
</div>

<div class="form-group">
    <label>Cidade: </label>
    <input type="text" name="cidade" class="form-control" placeholder="Nome:" value="{{ $funcionario->cidade ?? old('cidade') }}">
</div>

<div class="form-group">
    <label>UF: </label>
    <input type="text" name="uf" class="form-control" placeholder="Nome:" value="{{ $funcionario->uf ?? old('uf') }}">
</div>

<div class="form-group">
    <label>CEP</label>
    <input type="number" name="cep" class="form-control" value="{{ $funcionario->cep ?? old('cep') }}">
</div>

<div class="form-group">
    <label>Celular</label>
    <input type="number" name="fone_celular" class="form-control" value="{{ $funcionario->fone_celular ?? old('fone_celular') }}">
</div>

<div class="form-group">
    <label>email</label>
    <input type="email" name="email" class="form-control" value="{{ $funcionario->email ?? old('email') }}">
</div>

<div class="form-group">
    <label>Telefone Residencial: </label>
    <input type="number" name="telefone_residencial" class="form-control" value="{{ $funcionario->telefone_residencial ?? old('telefone_residencial') }}">
</div>

<div class="form-group">
    <label>Função: </label>
    <input type="text" name="funcao" class="form-control" placeholder="Nome:" value="{{ $funcionario->funcao ?? old('funcao') }}">
</div>

<div class="form-group">
    <label>Data de Admissão: </label>
    <input type="date" name="data_admissao" class="form-control" value="{{ $funcionario->data_admissao ?? old('data_admissao') }}">
</div>

<div class="form-group">
    <label>Data de Demissão</label>
    <input type="date" name="data_demissao" class="form-control" value="{{ $funcionario->data_demissao ?? old('data_demissao') }}">
</div>

<div class="form-group">
    <label>Salario: </label>
    <input type="text" name="salario" class="form-control" value="{{ $funcionario->salario ?? old('salario') }}">
</div>

<div class="form-group">
    <label>Data de Pagamento: </label>
    <input type="date" name="data_pagamento" class="form-control" value="{{ $funcionario->data_pagamento ?? old('data_pagamento') }}">
</div>

<div class="form-group">
    <label>Descontos: </label>
    <input type="text" name="descontos" class="form-control" value="{{ $funcionario->descontos ?? old('descontos') }}">
</div>

<div class="form-group">
    <label>Observações: </label>
    <input type="text" name="observacoes" class="form-control" value="{{ $funcionario->observacoes ?? old('observacoes') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
