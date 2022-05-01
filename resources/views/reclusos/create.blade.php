@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header bg-dark text-white">{{ __('Crear Recluso') }}</div>
                <div class="card-body">
                    <form class="row g-3" method="POST" action="{{route('recluso.create')}}">
                        @csrf
                        <input type="text" style="display:none;" value="1" name="idusercreate">
                        {{ $Us}}
                        <div class="col-md-4">
                            <label for="inputSexo" class="form-label">Sexo</label>
                            <select id="inputSexo" class="form-select" name="sex">
                              <option selected>Seleccione el sexo</option>
                              <option value="1">Hombre</option>
                              <option value="2">Mujer</option>
                            </select>
                          </div>
                        <div class="col-md-4">
                            <label for="inputTypeDocument" class="form-label">Tipo de Documento</label>
                            <select id="inputTypeDocument" class="form-select" name="idtypedocument">
                              <option selected>Seleccione tipo documento</option>
                              @foreach($TD as $TypeDoc)
                              <option value="{{ $TypeDoc->id }}">{{ $TypeDoc->typedoc }}</option>
                              @endforeach
                            </select>
                          </div>
                        <div class="col-md-6">
                          <label for="inputDocument" class="form-label">Número De Documento</label>
                          <input type="text" class="form-control" id="inputDocument" name="document">
                        </div>
                        <div class="col-md-6">
                          <label for="inputCodeRecluso" class="form-label">Código de Recluso</label>
                          <input type="text" class="form-control" id="inputCodeRecluso" name="coderecluse">
                        </div>
                        <div class="col-md-6">
                          <label for="inputNames" class="form-label">Nombres de Recluso</label>
                          <input type="text" class="form-control" id="inputNames" name="namerecluse">
                        </div>
                        <div class="col-md-6">
                            <label for="inputSurName" class="form-label">Apellidos de Recluso</label>
                            <input type="text" class="form-control" id="inputSurName" name="surnamerecluse">
                          </div>

                          <div class="col-md-4">
                            <label for="inputPavilion" class="form-label">Pabellón</label>
                            <select id="inputPavilion" class="form-select" name="idpavilions">
                              <option selected>Seleccione Pabellón</option>
                              @foreach($PB as $Pv)
                              <option value="{{ $Pv->id }}">{{ $Pv->namepavilions }}</option>
                              @endforeach
                            </select>
                          </div>

                        <div class="col-md-6">
                          <label for="inputNumberCell" class="form-label">Número de Celda</label>
                          <input type="text" class="form-control" id="inputNumberCell" name="jailcells">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="inputState" class="form-select" name="state">
                              <option selected>Seleccione un estado</option>
                              <option value="1">Activo</option>
                              <option value="0">Inactivo</option>
                            </select>
                          </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
