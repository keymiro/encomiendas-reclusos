@extends('layouts.app')

@section('content')
@include('layouts.style-datatables')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
            <div class="card-header bg-dark text-white">{{ __('Listado encomiendas') }}</div>
                <div class="card-body">
                    <table class="table table-dark table-striped table-responsive"  id="admin">
                        <thead>
                            <tr>
                                <th scope="col">Fecha de ingreso</th>
                                <th scope="col">TD</th>
                                <th scope="col">Nombres Recluso</th>
                                <th scope="col">Apellidos Recluso</th>
                                <th scope="col">Codigo Encomienda</th>
                                <th scope="col">Objeto Aceptado</th>
                                <th scope="col">Objecto Rechazado</th>
                                <th scope="col">Observación Objecto Rechazado</th>
                                <th scope="col">Documento Quien Entrega</th>
                                <th scope="col" class="notexport">Acción</th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>

@include('layouts.script-datatables')
<script>

        $('#admin').DataTable( {
            responsive: true,
            autoWidth: false,
            "ajax":'{{route('ecomienda.Ajax')}}',
            "columns": [
                // {data: 'created_at', render: $.fn.dataTable.render.moment('YYYY/MM/DD', 'Do MMM YY', 'fr')},
                {data: 'created_at'},
                {data: 'recluse.code_recluse'},
                {data: 'recluse.name_recluse'},
                {data: 'recluse.surname_recluse'},
                {data: 'cod'},
                {data: 'accepted_objects'},
                {data: 'declined_objects'},
                {data: 'declined_observations'},
                {data: 'document_send'},
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




</script>
</div>

@endsection
