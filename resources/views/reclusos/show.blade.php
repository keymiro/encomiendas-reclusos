@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-md-10">
            <div class="card">
            <div class="card-header bg-dark text-white">{{ __('Todos Los Reclusos') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Pabellón</th>
                                <th>Celda</th>
                                <th>Codigo de Recluso</th>
                                <th>Sexo</th>                              
                                <th>Tipo de Documento</th>
                                <th>Documento</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $a=0;
                        $b=0;
                        $c=0;
                        @endphp


                            @foreach($Rc as $recluso)
                            <tr>
                                @foreach($PB as $pb)
                                  @if(($recluso->idpavilions)==($pb->id))
                                  <td>{{ $pb->namepavilions }}</td>
                                  @endif
                                @endforeach
                                <td>{{ $recluso->jailcells }}</td>
                                <td>{{ $recluso->coderecluse }}</td>
                                @if(($recluso->Sex)==('1'))
                                  <td id="1">Hombre</td>
                                @else
                                  <td id="2">Mujer</td>
                                @endif
                                @foreach($TD as $td)
                                @if(($recluso->idtypedocument)==($td->id))
                                <td id="{{$a}}">{{ $td->typedoc }}</td>
                                @endif
                                @endforeach
                                <td>{{ $recluso->document }}</td>
                                <td>{{ $recluso->namerecluse }}</td>
                                <td>{{ $recluso->surnamerecluse }}</td>
                                @if(($recluso->state)=='1')
                                <td id="1">Activo</td>
                                @else
                                <td id="2">Inactivo</td>
                                @endif 
                                <td>
                                <a type="button" class="btnEditar btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</a>

                                <br>
                                    <a href="" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>  
                            @endforeach
                                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Recluso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3" method="POST" action="{{route('recluso.create')}}">
                        @csrf
                        <input type="text" style="display:none;" value="1" name="idusercreate">
                        {{ $Us}}
                        <div class="col-md-4">
                            <label for="inputSexo" class="form-label">Sexo</label>
                            <select id="inputSexo" class="form-select" name="sex">
                              <option id="s1" name="s1"></option>
                              <option id="s2" name="s2"></option>
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
                          <label for="document_edit" class="form-label">Número De Documento</label>
                          <input type="text" class="form-control" id="document_edit" name="document_edit">
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
                                <option id="dt1" name="dt1"></option>
                                <option id="dt2" name="dt2"></option>
                            </select>
                          </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Editar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</div>
@endsection