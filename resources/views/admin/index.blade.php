@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  bg-dark text-white">Listado de administradores</div>
                <div class="card-body">
                    <a class="btn btn-primary"  type="button" href="{{route('admin.create')}}">Crear Admin</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
