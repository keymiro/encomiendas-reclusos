@extends('layouts.app')

@section('content')
@include('layouts.style-datatables')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
            <div class="card-header bg-dark text-white">{{ __('Todos Los Reclusos') }}</div>
                <div class="card-body">
                    <table class="table table-dark table-striped table-responsive"  id="admin">
                        <thead>
                            <tr>
                                <th scope="col">Pabellón</th>
                                <th scope="col">Celda</th>
                                <th scope="col">Codigo de Recluso</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Tipo de Documento</th>
                                <th scope="col">Documento</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Estado</th>
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
    $(document).ready(function() {
        $('#admin').DataTable( {
            responsive: true,
            autoWidth: false,
            "ajax":'{{route('recluso.ReclusosAjax')}}',
            "columns": [
                {data: 'pavilions_id'},
                {data: 'jailcells'},
                {data: 'code_recluse'},
                {data: 'Sex'},
                {data: 'type_document_id'},
                {data: 'document'},
                {data: 'name_recluse'},
                {data: 'surname_recluse'},
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
