@include('pages.includes.alerts')

<div class="form-row">
    <div class="form-group col-md-2">
        <div class="form-group">
            <label>Numero </label>
            <input type="number" name="numero" class="form-control" value="{{ $vaga->numero ?? old('numero') }}">
        </div>
    </div>

    <div class="form-group col-md-2">
        <div class="dropdown">
            <label>Bloco</label>
            <div class="form-group">
                <select class="btn btn-success dropdown-toggle" name="bloco_id" id="inputbloco_id">
                    <option value="">Bloco</option>
                        @foreach ($blocos as $bloco)
                        <option name="{{$bloco->id}}" value="{{$bloco->id}}">
                            Bloco - {{$bloco->nome}}
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
