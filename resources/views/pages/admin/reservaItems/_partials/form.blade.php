@include('pages.includes.alerts')

<div class="form-row">
    <div class="form-group col-md-6">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $reservaItem->nome ?? old('nome') }}">
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-group">
            <label>Identificador Do Item </label>
            <input type="text" name="identificador_item" class="form-control" value="{{ $reservaItem->identificador_item ?? old('identificador_item') }}">
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-group">
            <label>Quantidade </label>
            <input type="number" name="quantidade" class="form-control" value="{{ $reservaItem->quantidade ?? old('quantidade') }}">
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-group">
            <label>Valor </label>
            <input type="number" name="valor" class="form-control" value="{{ $reservaItem->valor ?? old('valor') }}">
        </div>
    </div>
</div>

<div class="dropdown">
    <select class="btn btn-success dropdown-toggle" name="condominio_id" id="inputbloco_id">
        <option value="">Condominio</option>
            @foreach ($condominios as $condominio)
            <option name="{{$condominio->id}}" value="{{$condominio->id}}">
                Condominio - {{$condominio->nome}}
            </option>
            @endforeach
    </select>
</div>
<br>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
