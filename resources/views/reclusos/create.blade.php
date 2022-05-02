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
                        <div class="col-md-4">
                            <label for="inputSexo" class="form-label">Sexo</label>
                            <select id="inputSexo" class="form-select" name="inputSexo" required>
                              <option selected>Seleccione el sexo</option>
                              <option value="Hombre">Hombre</option>
                              <option value="Mujer">Mujer</option>
                            </select>
                          </div>
                        <div class="col-md-4">
                            <label for="inputTypeDocument" class="form-label">Tipo de Documento</label>
                            <select id="inputTypeDocument" class="form-select" name="inputTypeDocument" required>
                              <option selected>Seleccione tipo documento</option>
                              <option value="TI">TI</option>
                              <option value="CC">CC</option>
                              <option value="CE">CE</option>
                            </select>
                          </div>
                        <div class="col-md-6">
                          <label for="inputDocument" class="form-label">Número De Documento</label>
                          <input type="text" class="form-control" id="inputDocument" name="inputDocument" required>
                        </div>
                        <div class="col-md-6">
                          <label for="inputCodeRecluso" class="form-label">Código de Recluso</label>
                          <input type="text" class="form-control" id="inputCodeRecluso" name="inputCodeRecluso" required>
                        </div>
                        <div class="col-md-6">
                          <label for="inputNames" class="form-label">Nombres de Recluso</label>
                          <input type="text" class="form-control" id="inputNames" name="inputNames" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputSurName" class="form-label">Apellidos de Recluso</label>
                            <input type="text" class="form-control" id="inputSurName" name="inputSurName" required>
                          </div>

                          <div class="col-md-4">
                            <label for="inputPavilion" class="form-label">Pabellón</label>
                            <select id="inputPavilion" class="form-select" name="inputPavilion" required>
                              <option selected>Seleccione Pabellón</option>
                              <option value="Pabelló 1">Pabelló 1</option>
                              <option value="Pabelló 2">Pabelló 2</option>
                              <option value="Pabelló 3">Pabelló 3</option>
                              <option value="Pabelló 4">Pabelló 4</option>
                              <option value="Pabelló 5">Pabelló 5</option>
                              <option value="Pabelló 6">Pabelló 6</option>
                              <option value="Pabelló 7">Pabelló 7</option>
                            </select>
                          </div>

                        <div class="col-md-6">
                          <label for="inputNumberCell" class="form-label">Número de Celda</label>
                          <input type="text" class="form-control" id="inputNumberCell" name="inputNumberCell"required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="inputState" class="form-select" name="inputState"required>
                              <option selected>Seleccione un estado</option>
                              <option value="Activo">Activo</option>
                              <option value="Inactivo">Inactivo</option>
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
