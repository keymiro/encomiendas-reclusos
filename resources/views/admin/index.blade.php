@extends('layouts.app')
@section('content')
@include('layouts.style-datatables')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  bg-dark text-white">Listado de administradores</div>
                <div class="card-body">
                    <a class="btn btn-primary my-2"  type="button" href="{{route('admin.create')}}"><i class="fas fa-user-plus"></i> Nuevo admin</a>
                    <table class="table table-dark table-striped table-responsive shadow rounded" id="admin">
                        <thead>
                          <tr>
                            <th scope="col">Documento</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Estado</th>
                            <th scope="col" class="notexport">Acciones</th>
                          </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('layouts.script-datatables')
{{-- composer require yajra/laravel-datatables-oracle : para retornar los datos como pide datatables--}}
<script>
    $(document).ready(function() {
        $('#admin').DataTable( {
            responsive: true,
            autoWidth: false,
            "ajax":'{{route('admin.usersAjax')}}',
            "columns": [
                {data: 'document'},
                {data: 'names'},
                {data: 'lastnames'},
                {data: 'email'},
                {data: 'rol'},
                {data: 'state'},
                {data: 'btn'}
            ],
            "language":{
                        "emptyTable":     "Información no disponible",
                        "info":           "Mostrando la página _START_ de _TOTAL_ ",
                        "infoEmpty":      "Mostrando 0 de 0 registros",
                        "infoFiltered":   "(Filtrado de _MAX_ registros totales)",
                        "lengthMenu":     "Mostrar _MENU_ registros por página",
                        "loadingRecords": "Cargando...",
                        "processing":     "Procesando...",
                        "search":         "Buscar:",
                        "zeroRecords":    "Registro no encontrado",
                        "paginate": {
                            "first":      "Primera",
                            "last":       "Ultima",
                            "next":       "Siguiente",
                            "previous":   "Anterior"
                        }
                    },
            "dom": 'Bflrtip',
            // 'copy', 'excel', 'pdf', 'print'
            buttons:
            [
                {
                    extend:'copy',
                    text: '<i class="far fa-copy"></i>',
                    titleAttr:'Copiar a Portapapeles',
                    className:'btn btn-secondary',
                    exportOptions: {
                        columns: ':not(.notexport)'
                    }
                },
                {
                    extend:'excel',
                    text: '<i class="fas fa-file-excel"></i>',
                    titleAttr:'Exportar Excel',
                    className:'btn btn-success',
                    exportOptions: {
                        columns: ':not(.notexport)'
                    }
                },
                {
                    extend:'pdf',
                    text: '<i class="fas fa-file-pdf"></i>',
                    titleAttr:'Exportar PDF',
                    className:'btn btn-danger',
                    exportOptions: {
                        columns: ':not(.notexport)'
                    }
                },
                {
                    extend:'print',
                    text: '<i class="fas fa-print"></i>',
                    titleAttr:'Imprimir',
                    className:'btn btn-info',
                    exportOptions: {
                        columns: ':not(.notexport)'
                    }
                }

            ]
        } );
} );
</script>
