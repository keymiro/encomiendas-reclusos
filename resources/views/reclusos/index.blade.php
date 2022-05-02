@extends('layouts.app')

@section('content')
@include('layouts.style-datatables')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-md-10">
            <div class="card">
            <div class="card-header bg-dark text-white">{{ __('Todos Los Reclusos') }}</div>
                <div class="card-body">
                    <table class="table"  id="admin">
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

                    </table>
                </div>
            </div>
        </div>
    </div>

@include('layouts.script-datatables')
<script>
    $(document).ready(function() {
        $('#admin').DataTable( {
            responsive: true,
            autoWidth: false,
            "ajax":'{{route('recluso.ReclusosAjax')}}',
            "columns": [
                {data: 'idtypedocument'},
                {data: 'document'},
                {data: 'coderecluse'},
                {data: 'Sex'},
                {data: 'namerecluse'},
                {data: 'surnamerecluse'},
                {data: 'idpavilions'},
                {data: 'jailcells'},
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
</div>

@endsection