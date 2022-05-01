@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  bg-dark text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                   <h4>Total Admin : {{$user}}</h4>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
