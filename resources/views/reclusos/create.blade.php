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
                        <div class="col-md-6">
                          <label for="inputTypeDocument" class="form-label">Tipo de Documento</label>
                          <input type="text" class="form-control" id="inputTypeDocument" name="email">
                        </div>
                        <div class="col-md-6">
                          <label for="inputDocument" class="form-label">Número De Documento</label>
                          <input type="text" class="form-control" id="inputDocument" name="email">
                        </div>
                        <div class="col-md-6">
                          <label for="inputCodeRecluso" class="form-label">Código de Recluso</label>
                          <input type="text" class="form-control" id="inputCodeRecluso" name="email">
                        </div>
                        <div class="col-md-6">
                          <label for="inputNames" class="form-label">Nombres de Recluso</label>
                          <input type="text" class="form-control" id="inputNames" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="inputSurName" class="form-label">Apellidos de Recluso</label>
                            <input type="text" class="form-control" id="inputSurName" name="names">
                          </div>
                          <div class="col-md-6">
                            <label for="inputPavilion" class="form-label">Pabellón<nav></nav></label>
                            <input type="text" class="form-control" id="inputPavilion" name="lastnames">
                          </div>
                        <div class="col-md-6">
                          <label for="inputNumberCell" class="form-label">Número de Celda</label>
                          <input type="text" class="form-control" id="inputNumberCell" name="document">
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
