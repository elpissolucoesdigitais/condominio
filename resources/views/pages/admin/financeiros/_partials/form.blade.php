@include('pages.includes.alerts')

<div class="dropdown">
    <select class="btn btn-success dropdown-toggle" name="bloco_id" id="inputbloco_id">
        <option value="">Bloco</option>
            @foreach ($blocos as $bloco)
            <option name="{{$bloco->id}}" value="{{$bloco->id}}">
                Bloco - {{$bloco->nome}}
            </option>
            @endforeach
    </select>
</div>

<br>

<div class="dropdown">
    <select class="btn btn-success dropdown-toggle" name="fluxo_caixas_id" id="inputbloco_id">
        <option value="">Fluxo de Caixa</option>
            @foreach ($fluxoCaixas as $fluxoCaixa)
            <option name="{{$fluxoCaixa->id}}" value="{{$fluxoCaixa->id}}">
                Fluxo de Caixa - {{$fluxoCaixa->nome}}
            </option>
            @endforeach
    </select>
</div>

<br>

<div class="dropdown">
    <select class="btn btn-success dropdown-toggle" name="impostos_id" id="inputbloco_id">
        <option value="">Imposto</option>
            @foreach ($impostos as $imposto)
            <option name="{{$imposto->id}}" value="{{$imposto->id}}">
                Imposto - {{$imposto->descricao}}
            </option>
            @endforeach
    </select>
</div>

<br>

<div class="dropdown">
    <select class="btn btn-success dropdown-toggle" name="consumos_id" id="inputbloco_id">
        <option value="">Consumo</option>
            @foreach ($consumos as $consumo)
            <option name="{{$consumo->id}}" value="{{$consumo->id}}">
                Consumo - {{$consumo->descricao}}
            </option>
            @endforeach
    </select>
</div>

<br>

<div class="dropdown">
    <select class="btn btn-success dropdown-toggle" name="funcionarios_id" id="inputbloco_id">
        <option value="">Funcionario</option>
            @foreach ($funcionarios as $funcionario)
            <option name="{{$funcionario->id}}" value="{{$funcionario->id}}">
                Funcionário - {{$funcionario->nome}}
            </option>
            @endforeach
    </select>
</div>

<br>

<div class="dropdown">
    <select class="btn btn-success dropdown-toggle" name="controle_pagamentos_id" id="inputbloco_id">
        <option value="">Controle Pagamentos</option>
            @foreach ($controlePagamentos as $controlePagamento)
            <option name="{{$controlePagamento->id}}" value="{{$controlePagamento->id}}">
                Controle de Pagamento - {{$controlePagamento->status}}
            </option>
            @endforeach
    </select>
</div>

<div class="form-group">
    <label>Data Financeiro:</label>
    <input type="date" name="data_financeiro" class="form-control" value="{{ $financeiro->data_financeiro ?? old('data_financeiro') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
