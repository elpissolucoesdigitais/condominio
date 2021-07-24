@include('pages.includes.alerts')

<div class="form-row">
    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Numero do Apartamento </label>
            <input type="number" name="numero" class="form-control" value="{{ $apartamento->numero ?? old('numero') }}">
        </div>
    </div>
    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Andar</label>
            <input type="number" name="andar" class="form-control" value="{{ $apartamento->numero ?? old('numero') }}">
        </div>
    </div>
    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Interfone</label>
            <input type="number" name="interfone" class="form-control" value="{{ $apartamento->andar ?? old('andar') }}">
        </div>
    </div>
    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Valor</label>
            <input type="number" name="valor" class="form-control" value="{{ $apartamento->interfone ?? old('interfone') }}">
        </div>
    </div>
</div>

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

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
