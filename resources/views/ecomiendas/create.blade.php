@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  bg-dark text-white">DATOS DE RECLUSO</div>
                <div class="card-body">
                    <div id="message"></div>
                    <form class="row g-3" method="POST" action="{{route('admin.store')}}">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputCodeRecluset" class="form-label">Número De TD</label>
                            <input type="text" id='searchCodeRecluse' class="form-control" id="inputCodeRecluse" name="inputCodeRecluse" required>
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
                    </form>
                </div>
                <div class="visually-hidden" id="quienEntrega">
                    <div class="card-header  bg-dark text-white">Datos quien entrega el paquete</div>
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{route('admin.store')}}">
                                <div class="col-md-6">
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
                                    <label for="inputNames" class="form-label">Nombres</label>
                                    <input type="text" class="form-control" id="inputNames" name="inputNames" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputSurName" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="inputSurName" name="inputSurName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Correo Electronico</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCellPhone" class="form-label">Numero de Celular</label>
                                    <input type="email" class="form-control" id="inputCellPhone" name="inputCellPhone" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPhone" class="form-label">Numero de Telefono</label>
                                    <input type="email" class="form-control" id="inputPhone" name="inputPhone" required>
                                </div>
                            </form>
                        </div>

                    <div class="card-header  bg-dark text-white ">Item</div>
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{route('admin.store')}}">
                                <div class="col-md-6">
                                    <label for="inputItem" class="form-label">Item</label>
                                    <input type="email" class="form-control" id="inputItem" name="inputItem" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputDescription" class="form-label">Descripción</label>
                                    <input type="text" class="form-control" id="inputDescription" name="inputDescription" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCant" class="form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="inputCant" name="inputCant" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Estado</label>
                                    <select id="inputState" class="form-select" name="inputState"required>
                                        <option selected>Seleccione un estado</option>
                                        <option value="Aceptado">Aceptado</option>
                                        <option value="Devolucion">Devolución</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                            <div class="card-body">
                                <div class="col-md-12 text-center fw-bolder fs-3">Aceptados</div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-md-12 text-center fw-bolder fs-3">Devolución</div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12 my-4 mx-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Finalizar
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
<script>
    let search          = document.getElementById('searchCodeRecluse');
    var NameReclusoView = document.getElementById('NameReclusoView');
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
            message.innerHTML     = '';
            quienEntrega.classList.remove('visually-hidden');
           }else {
            NameReclusoView.value = '';
            PavilionView.value    = '';
            NumberCellView.value  = '';
            quienEntrega.classList.add('visually-hidden');
            messageNoFound(searchValueLength,user,message);
           }

    }

    function messageNoFound(searchValueLength,user,message){
        if (searchValueLength ==''){
              return  message.innerHTML  = '';
        }else{
             return   message.innerHTML  = "<div class='alert alert-info' role='alert'>"+ user.message +" <a class='btn btn-outline-success' href='{{route('recluso.create')}}'> Crear Recluso</a> </div>";
        }
    }

    async function getUser(){
    try {
      let res =  await fetch('{{route('recluso.search')}}?inputCodeRecluse='+search.value,{method: 'GET'});
        return await res.json();

    } catch (error){
        console.log(error)
    }

    }

 </script>
@endsection

