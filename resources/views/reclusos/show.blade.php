@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header bg-dark text-white"><i class="fas fa-eye"></i>  {{ __('Datos del Recluso ') }}{{$Rc->namerecluse}}</div>
                <div class="card-body">
                    <form class="row g-3" >
                        <div class="col-md-4">
                            <label for="inputSexo" class="form-label">Sexo</label>
                            <select id="inputSexo" class="form-select" name="inputSexo" disabled>
                             @if($Rc->Sex=="Hombre")
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                              @else
                              <option value="Mujer">Mujer</option>
                              <option value="Hombre">Hombre</option>
                              @endif
                            </select>
                          </div>
                        <div class="col-md-4">
                            <label for="inputTypeDocument" class="form-label">Tipo de Documento</label>
                            <select id="inputTypeDocument" class="form-select" name="inputTypeDocument" disabled>
                            @if($Rc->idtypedocument=="TI")
                              <option value="TI">TI</option>
                              <option value="CC">CC</option>
                              <option value="CE">CE</option>
                              @elseif($Rc->idtypedocument=="CC")
                              <option value="CC">CC</option>
                              <option value="CE">CE</option>
                              <option value="TI">TI</option>
                              @elseif($Rc->idtypedocument=="CE")
                              <option value="CE">CE</option>
                              <option value="TI">TI</option>
                              <option value="CC">CC</option>
                              @endif
                            </select>
                          </div>
                        <div class="col-md-6">
                          <label for="inputDocument" class="form-label">Número De Documento</label>
                          <input type="text" class="form-control" id="inputDocument" name="inputDocument" value="{{$Rc->document}}" readonly required>
                        </div>
                        <div class="col-md-6">
                          <label for="inputCodeRecluso" class="form-label">Código de Recluso</label>
                          <input type="text" class="form-control" id="inputCodeRecluso" name="inputCodeRecluso" value="{{$Rc->coderecluse}}" readonly required>
                        </div>
                        <div class="col-md-6">
                          <label for="inputNames" class="form-label">Nombres de Recluso</label>
                          <input type="text" class="form-control" id="inputNames" name="inputNames" value="{{$Rc->namerecluse}}" readonly required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputSurName" class="form-label">Apellidos de Recluso</label>
                            <input type="text" class="form-control" id="inputSurName" name="inputSurName" value="{{$Rc->surnamerecluse}}" readonly required>
                          </div>

                          <div class="col-md-4">
                            <label for="inputPavilion" class="form-label">Pabellón</label>
                            <select id="inputPavilion" class="form-select" name="inputPavilion" disabled>
                            @if($Rc->idpavilions=="Pabelló 1")
                              <option value="Pabelló 1">Pabelló 1</option>
                              <option value="Pabelló 2">Pabelló 2</option>
                              <option value="Pabelló 3">Pabelló 3</option>
                              <option value="Pabelló 4">Pabelló 4</option>
                              <option value="Pabelló 5">Pabelló 5</option>
                              <option value="Pabelló 6">Pabelló 6</option>
                              <option value="Pabelló 7">Pabelló 7</option>
                            @elseif($Rc->idpavilions=="Pabelló 2")
                              <option value="Pabelló 2">Pabelló 2</option>
                              <option value="Pabelló 3">Pabelló 3</option>
                              <option value="Pabelló 4">Pabelló 4</option>
                              <option value="Pabelló 5">Pabelló 5</option>
                              <option value="Pabelló 6">Pabelló 6</option>
                              <option value="Pabelló 7">Pabelló 7</option>
                              <option value="Pabelló 1">Pabelló 1</option>
                            @elseif($Rc->idpavilions=="Pabelló 3")
                              <option value="Pabelló 3">Pabelló 3</option>
                              <option value="Pabelló 4">Pabelló 4</option>
                              <option value="Pabelló 5">Pabelló 5</option>
                              <option value="Pabelló 6">Pabelló 6</option>
                              <option value="Pabelló 7">Pabelló 7</option>
                              <option value="Pabelló 1">Pabelló 1</option>
                              <option value="Pabelló 2">Pabelló 2</option>
                            @elseif($Rc->idpavilions=="Pabelló 4")
                              <option value="Pabelló 4">Pabelló 4</option>
                              <option value="Pabelló 5">Pabelló 5</option>
                              <option value="Pabelló 6">Pabelló 6</option>
                              <option value="Pabelló 7">Pabelló 7</option>
                              <option value="Pabelló 1">Pabelló 1</option>
                              <option value="Pabelló 2">Pabelló 2</option>
                              <option value="Pabelló 3">Pabelló 3</option>
                            @elseif($Rc->idpavilions=="Pabelló 5")
                              <option value="Pabelló 5">Pabelló 5</option>
                              <option value="Pabelló 6">Pabelló 6</option>
                              <option value="Pabelló 7">Pabelló 7</option>
                              <option value="Pabelló 1">Pabelló 1</option>
                              <option value="Pabelló 2">Pabelló 2</option>
                              <option value="Pabelló 3">Pabelló 3</option>
                              <option value="Pabelló 4">Pabelló 4</option>
                            @elseif($Rc->idpavilions=="Pabelló 6")
                              <option value="Pabelló 6">Pabelló 6</option>
                              <option value="Pabelló 7">Pabelló 7</option>
                              <option value="Pabelló 1">Pabelló 1</option>
                              <option value="Pabelló 2">Pabelló 2</option>
                              <option value="Pabelló 3">Pabelló 3</option>
                              <option value="Pabelló 4">Pabelló 4</option>
                              <option value="Pabelló 5">Pabelló 5</option>
                            @elseif($Rc->idpavilions=="Pabelló 7")
                              <option value="Pabelló 7">Pabelló 7</option>
                              <option value="Pabelló 1">Pabelló 1</option>
                              <option value="Pabelló 2">Pabelló 2</option>
                              <option value="Pabelló 3">Pabelló 3</option>
                              <option value="Pabelló 4">Pabelló 4</option>
                              <option value="Pabelló 5">Pabelló 5</option>
                              <option value="Pabelló 6">Pabelló 6</option>
                            @endif
                            </select>
                          </div>

                        <div class="col-md-6">
                          <label for="inputNumberCell" class="form-label">Número de Celda</label>
                          <input type="text" class="form-control" id="inputNumberCell" name="inputNumberCell" value="{{$Rc->jailcells}}" readonly required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="inputState" class="form-select" name="inputState" disabled>
                            @if($Rc->state=="Activo")
                              <option value="Activo">Activo</option>
                              <option value="Inactivo">Inactivo</option>
                            @else
                              <option value="Inactivo">Inactivo</option>
                              <option value="Activo">Activo</option>
                            @endif
                            </select>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
