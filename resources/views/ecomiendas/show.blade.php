@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header  bg-dark text-white my-4 shadow rounded text-center"><h2>Detalle Encomienda</h2></div>
            <div class="card">
                <div class="card-header  bg-dark text-white">Datos del recluso</div>
                <div class="card-body">
                    <div id="message"></div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputCodeRecluset" class="form-label"> Número De TD</label>
                            <input type="text" id='searchCodeRecluse' class="form-control" id="inputCodeRecluse" name="inputCodeRecluse" readonly value="{{$encomienda->recluse->code_recluse}}">
                            <input type="hidden" name="recluseId" id="recluseId">
                        </div>
                            <div class="col-md-6">
                                <label for="NameReclusoView" class="form-label" >Nombre</label>
                                <input type="text" class="form-control" id="NameReclusoView" name="NameReclusoView"  readonly value="{{$encomienda->recluse->name_recluse}}">
                            </div>
                            <div class="col-md-6">
                                <label for="PavilionView" class="form-label">Pabellon</label>
                                <input type="text" class="form-control" id="PavilionView" name="PavilionView" readonly value="{{$encomienda->recluse->pavilions_id}}">
                            </div>
                            <div class="col-md-6">
                                <label for="NumberCellView" class="form-label">Celda</label>
                                <input type="text" class="form-control" id="NumberCellView" name="NumberCellView" readonly value="{{$encomienda->recluse->jailcells}}">
                            </div>
                    </div>
                </div>
                <div class="" id="quienEntrega">
                    <div class="card-header  bg-dark text-white">Datos quien entrega la encomienda</div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputTypeDocument" class="form-label">Tipo de Documento</label>
                                    <select id="inputTypeDocument" class="form-select" name="inputTypeDocument" readonly>
                                    <option value="{{$encomienda->type_document_send}}">{{$encomienda->type_document_send}}</option>
                                    <option value="TI">TI</option>
                                    <option value="CC">CC</option>
                                    <option value="CE">CE</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputDocument" class="form-label">Número De Documento</label>
                                    <input type="text" class="form-control" id="inputDocument" name="inputDocument" readonly value="{{$encomienda->document_send}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNames" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" id="inputNames" name="inputNames" readonly value="{{$encomienda->names_send}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Correo Electronico</label>
                                    <input type="email" class="form-control" id="email" name="email" readonly value="{{$encomienda->email_send}}">
                                </div>
                            </div>
                        </div>

                    <div class="card-header  bg-dark text-white ">Encomienda recibida</div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="accepted_objects" readonly>{{$encomienda->accepted_objects}}</textarea>
                                        <label for="floatingTextarea2">Objetos Aceptados</label>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="declined_objects" readonly>{{$encomienda->declined_objects}}</textarea>
                                        <label for="floatingTextarea2">Objetos Rechazados</label>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCant" class="form-label">Evidencia fotografica</label>
                                    <img src="{{Storage::url($encomienda->url_img)}}" class="img-fluid rounded-sm" alt="p">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="declined_observations" readonly>{{$encomienda->declined_observations}}</textarea>
                                        <label for="floatingTextarea2">Observaciónes Rechazados</label>
                                      </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-12 my-4 mx-4">
                                <button type="submit" class="btn btn-primary">Editar</button>
                                {{-- <a href="{{route('action',$encomienda->id)}}"></a>
                                <input type="hidden" name="id_encomienda" value="{{$encomienda->id}}"> --}}
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   Imprimir Sctiker
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Opciones de Ecomiendas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
          <a href="" class="btn btn-secondary">Imprimir</a>
          <a href="{{route('ecomienda.create')}}" class="btn btn-primary">Nuevo Registro</a>
      </div>
    </div>
  </div>
</div>

@endsection
