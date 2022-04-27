@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Register') }}</div>

                <div class="card-body">
                    <form class="row g-3" method="POST">
                        @csrf
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Email</label>
                          <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Nombres</label>
                            <input type="email" class="form-control" id="inputEmail4">
                          </div>
                          <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Apellidos</label>
                            <input type="password" class="form-control" id="inputPassword4">
                          </div>
                        <div class="col-md-6">
                          <label for="inputCity" class="form-label">Documento</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                          <label for="inputState" class="form-label">Rol</label>
                          <select id="inputState" class="form-select">
                            <option selected>Seleccione un rol</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
