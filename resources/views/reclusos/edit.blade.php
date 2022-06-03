@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header bg-dark text-white"><i class="fas fa-user-edit"></i> {{ __('Editar Recluso') }}</div>
                <div class="card-body">
                    <form class="row g-3" method="POST" action="{{route('recluso.update',$Rc->id)}}">
                    @method('PATCH')
                        @csrf
                        <div class="col-md-4">
                            <label for="inputSexo" class="form-label">Sexo</label>
                            <select id="inputSexo" class="form-select" name="inputSexo">
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
                            <select id="inputTypeDocument" class="form-select" name="inputTypeDocument">
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
                          <input type="text" class="form-control" id="inputDocument" name="inputDocument" value="{{$Rc->document}}">
                        </div>
                        <div class="col-md-6">
                          <label for="inputCodeRecluso" class="form-label">Código de Recluso</label>
                          <input type="text" class="form-control" id="inputCodeRecluso" name="inputCodeRecluso" value="{{$Rc->coderecluse}}">
                        </div>
                        <div class="col-md-6">
                          <label for="inputNames" class="form-label">Nombres de Recluso</label>
                          <input type="text" class="form-control" id="inputNames" name="inputNames" value="{{$Rc->namerecluse}}">
                        </div>
                        <div class="col-md-6">
                            <label for="inputSurName" class="form-label">Apellidos de Recluso</label>
                            <input type="text" class="form-control" id="inputSurName" name="inputSurName" value="{{$Rc->surnamerecluse}}">
                          </div>

                          <div class="col-md-4">
                            <label for="inputPavilion" class="form-label">Pabellón</label>
                            <select id="inputPavilion" class="form-select" name="inputPavilion">
                            @if($Rc->idpavilions=="Pabellón 1")
                              <option value="Pabellón 1">Pabelnló 1</option>
                              <option value="Pabellón 2">Pabellón 2</option>
                              <option value="Pabellón 3">Pabellón 3</option>
                              <option value="Pabellón 4">Pabellón 4</option>
                              <option value="Pabellón 5">Pabellón 5</option>
                              <option value="Pabellón 6">Pabellón 6</option>
                              <option value="Pabellón 7">Pabellón 7</option>
                            @elseif($Rc->idpavilions=="Pabellón 2")
                              <option value="Pabellón 2">Pabellón 2</option>
                              <option value="Pabellón 3">Pabellón 3</option>
                              <option value="Pabellón 4">Pabellón 4</option>
                              <option value="Pabellón 5">Pabellón 5</option>
                              <option value="Pabellón 6">Pabellón 6</option>
                              <option value="Pabellón 7">Pabellón 7</option>
                              <option value="Pabellón 1">Pabellón 1</option>
                            @elseif($Rc->idpavilions=="Pabellón 3")
                              <option value="Pabellón 3">Pabellón 3</option>
                              <option value="Pabellón 4">Pabellón 4</option>
                              <option value="Pabellón 5">Pabellón 5</option>
                              <option value="Pabellón 6">Pabellón 6</option>
                              <option value="Pabellón 7">Pabellón 7</option>
                              <option value="Pabellón 1">Pabellón 1</option>
                              <option value="Pabellón 2">Pabellón 2</option>
                            @elseif($Rc->idpavilions=="Pabellón 4")
                              <option value="Pabellón 4">Pabellón 4</option>
                              <option value="Pabellón 5">Pabellón 5</option>
                              <option value="Pabellón 6">Pabellón 6</option>
                              <option value="Pabellón 7">Pabellón 7</option>
                              <option value="Pabellón 1">Pabellón 1</option>
                              <option value="Pabellón 2">Pabellón 2</option>
                              <option value="Pabellón 3">Pabellón 3</option>
                            @elseif($Rc->idpavilions=="Pabellón 5")
                              <option value="Pabellón 5">Pabellón 5</option>
                              <option value="Pabellón 6">Pabellón 6</option>
                              <option value="Pabellón 7">Pabellón 7</option>
                              <option value="Pabellón 1">Pabellón 1</option>
                              <option value="Pabellón 2">Pabellón 2</option>
                              <option value="Pabellón 3">Pabellón 3</option>
                              <option value="Pabellón 4">Pabellón 4</option>
                            @elseif($Rc->idpavilions=="Pabellón 6")
                              <option value="Pabellón 6">Pabellón 6</option>
                              <option value="Pabellón 7">Pabellón 7</option>
                              <option value="Pabellón 1">Pabellón 1</option>
                              <option value="Pabellón 2">Pabellón 2</option>
                              <option value="Pabellón 3">Pabellón 3</option>
                              <option value="Pabellón 4">Pabellón 4</option>
                              <option value="Pabellón 5">Pabellón 5</option>
                            @elseif($Rc->idpavilions=="Pabellón 7")
                              <option value="Pabellón 7">Pabellón 7</option>
                              <option value="Pabellón 1">Pabellón 1</option>
                              <option value="Pabellón 2">Pabellón 2</option>
                              <option value="Pabellón 3">Pabellón 3</option>
                              <option value="Pabellón 4">Pabellón 4</option>
                              <option value="Pabellón 5">Pabellón 5</option>
                              <option value="Pabellón 6">Pabellón 6</option>
                            @endif
                            </select>
                          </div>

                        <div class="col-md-6">
                          <label for="inputNumberCell" class="form-label">Número de Celda</label>
                          <input type="text" class="form-control" id="inputNumberCell" name="inputNumberCell" value="{{$Rc->jailcells}}">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="inputState" class="form-select" name="inputState">
                            @if($Rc->state=="Activo")
                              <option value="Activo">Activo</option>
                              <option value="Inactivo">Inactivo</option>
                            @else
                              <option value="Inactivo">Inactivo</option>
                              <option value="Activo">Activo</option>
                            @endif
                            </select>
                          </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Editar</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
