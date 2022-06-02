@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card-header  bg-dark text-white my-4 shadow rounded text-center"><h2>Recibir Encomiendas</h2></div>
            <div class="card">
              <form  method="POST" action="{{route('ecomienda.store')}}"  enctype="multipart/form-data">
                @csrf
                <div class="card-header  bg-dark text-white">Datos del recluso</div>
                <div class="card-body">
                    <div id="message"></div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputCodeRecluset" class="form-label">Digitá El Número De TD</label>
                            <input type="text" id='searchCodeRecluse' class="form-control" id="inputCodeRecluse" name="inputCodeRecluse" required>
                            <input type="hidden" name="recluseId" id="recluseId">
                        </div>
                            <div class="col-md-6">
                                <label for="NameReclusoView" class="form-label" >Nombre</label>
                                <input type="text" class="form-control" id="NameReclusoView" name="NameReclusoView"  disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="PavilionView" class="form-label">Pabellon</label>
                                <input type="text" class="form-control" id="PavilionView" name="PavilionView" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="NumberCellView" class="form-label">Celda</label>
                                <input type="text" class="form-control" id="NumberCellView" name="NumberCellView" disabled>
                            </div>
                    </div>
                </div>
                <div class="visually-hidden" id="quienEntrega">
                    <div class="card-header  bg-dark text-white">Datos quien entrega la encomienda</div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputTypeDocument" class="form-label">Tipo de Documento</label>
                                    <select id="inputTypeDocument" class="form-select" name="inputTypeDocument" required>
                                    <option value="">Seleccione tipo documento</option>
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
                                    <label for="inputNames" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" id="inputNames" name="inputNames" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Correo Electronico</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                        </div>

                    <div class="card-header  bg-dark text-white ">Encomienda recibida</div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="accepted_objects" required></textarea>
                                        <label for="floatingTextarea2">Objetos Aceptados</label>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="declined_objects" required></textarea>
                                        <label for="floatingTextarea2">Objetos Rechazados</label>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCant" class="form-label">Evidencia fotografica</label>
                                        <input class="form-control" type="file" id="formFile" name="file" required>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="declined_observations" required></textarea>
                                        <label for="floatingTextarea2">Observaciónes Rechazados</label>
                                      </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
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
<script>
    let search          = document.getElementById('searchCodeRecluse');
    var NameReclusoView = document.getElementById('NameReclusoView');
    var recluseId       = document.getElementById('recluseId');
    var PavilionView    = document.getElementById('PavilionView');
    var NumberCellView  = document.getElementById('NumberCellView');
    var message         = document.getElementById('message');
    var quienEntrega    = document.getElementById('quienEntrega');

    search.oninput = async function () {
        let user =   await getUser();
        let searchValueLength = search.value.length;
        console.log(user);
        if (searchValueLength > 0 && user.state == 200 ) {
            NameReclusoView.value = user.recluse.name_recluse;
            PavilionView.value    = user.recluse.pavilions_id;
            NumberCellView.value  = user.recluse.jailcells;
            recluseId.value       = user.recluse.id;
            message.innerHTML     = '';
            quienEntrega.classList.remove('visually-hidden');
        }else{
            NameReclusoView.value = '';
            recluseId.value       = '';
            PavilionView.value    = '';
            NumberCellView.value  = '';
            quienEntrega.classList.add('visually-hidden');
            messageNoFoundRecluse(searchValueLength,user,message);
        }

    }

    function messageNoFoundRecluse(searchValueLength,user,message){
        if (searchValueLength ==''){
              return  message.innerHTML  = '';
        }else{
             return   message.innerHTML  = "<div class='alert alert-info' role='alert'>"+ user.message +" <a class='btn btn-outline-success' href='{{route('recluso.create')}}'> Crear Recluso</a> </div>";
        }
    }

    async function getUser(){

        try{

            let res =  await fetch('{{route('recluso.search')}}?inputCodeRecluse='+search.value,{method: 'GET'});
            return await res.json();

        }catch(error){

            console.log(error)
        }

    }

 </script>
@endsection

