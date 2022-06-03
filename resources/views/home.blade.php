@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  bg-dark text-white"><i class="fas fa-tachometer-alt"></i> {{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="card bg-primary text-white shadow rounded">
                                <div class="card-body">
                                   <h4><i class="fas fa-users"></i> Total Admin : {{$user}}</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-warning text-white shadow rounded">
                                <div class="card-body">
                                   <h4><i class="fas fa-users"></i> Total Reclusos : {{$recluse}}</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-danger text-white shadow rounded">
                                <div class="card-body">
                                   <h4><i class="fas fa-boxes"></i> Total Encomiendas : {{$encomienda}}</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
