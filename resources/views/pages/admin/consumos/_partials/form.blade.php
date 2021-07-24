@include('pages.includes.alerts')

<div class="dropdown">
    <select class="btn btn-success dropdown-toggle" name="tipo_consumo">
        <option value="">Despesas</option>
            <option name="tipo_consumo" value="Agua">
                Consumo - Agua
            </option>
            <option name="tipo_consumo" value="Luz">
                Consumo - Luz
            </option>
            <option name="tipo_consumo" value="Gás">
                Consumo - Gás
            </option>
            <option name="tipo_consumo" value="Manuntenção">
                Despesas - Manuntenção
            </option>
            <option name="tipo_consumo" value="Obras, Concertos">
                Despesas - Obras, Concertos
            </option>
            <option name="tipo_consumo" value="Seguros">
                Seguros
            </option>
            <option name="tipo_consumo" value="Segurança">
                Segurança
            </option>
            <option name="tipo_consumo" value="Diversos">
                Diversos
            </option>
    </select>
</div>
<br>

<div class="form-group">
    <label>Valor: </label>
    <input type="number" name="valor" class="form-control" value="{{ $consumo->valor ?? old('valor') }}">
</div>

<div class="form-group">
    <label>Data de Competenciaa: </label>
    <input type="date" name="data_competencia" class="form-control" value="{{ $consumo->data_competencia ?? old('data_competencia') }}">
</div>

<div class="form-group">
    <label>Vencimento: </label>
    <input type="date" name="vencimento" class="form-control" value="{{ $consumo->vencimento ?? old('vencimento') }}">
    <br>
    <div class="dropdown">
        <select class="btn btn-success dropdown-toggle" name="status">
            <option value="">Status</option>
                <option name="status" value="Pago">
                    Status - Pago
                </option>
                <option name="status" value="Andamento">
                    Status - Andamento
                </option>
                <option name="status" value="Vencido">
                    Status - Vencido
                </option>
        </select>
    </div>
</div>

<div class="form-group">
    <label>Descrição: </label>
    <input type="text" name="descricao" class="form-control" placeholder="Nome:" value="{{ $consumo->descricao ?? old('descricao') }}">
</div>

<div class="dropdown">
    <select class="btn btn-success dropdown-toggle" name="apartamento_id" id="inputbloco_id">
        <option value="">Apartamento</option>
            @foreach ($apartamentos as $apartamento)
            <option name="{{$apartamento->id}}" value="{{$apartamento->id}}">
                Apartamento - {{$apartamento->numero}}
            </option>
            @endforeach
    </select>
</div>
<br>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
