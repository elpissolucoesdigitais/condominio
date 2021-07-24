@include('pages.includes.alerts')

<div class="form-row">
    <div class="form-group col-md-8">
        <div class="form-group">
            <label>Nome </label>
            <input type="text" name="nome" class="form-control" value="{{ $bloco->nome ?? old('nome') }}">
        </div>
    </div>

    <div class="form-group col-md-4">
        <label>Condominio</label>
        <div class="dropdown">
            <select class="btn btn-success dropdown-toggle" name="condominio_id" id="inputcondominio_id">
                <option value="">-</option>
                    @foreach ($condominios as $condominio)
                    <option name="{{$condominio->id}}" value="{{$condominio->id}}">
                        Condominio - {{$condominio->nome}}
                    </option>
                    @endforeach
            </select>
        </div>
    </div>
</div>

<br>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
