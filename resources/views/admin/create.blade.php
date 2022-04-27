@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Register') }}</div>

                <div class="card-body">
                    <form class="row g-3" method="POST" action="{{route('admin.store')}}">
                        @csrf
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Email</label>
                          <input type="email" class="form-control" id="inputEmail4" name="email">
                        </div>
                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" id="inputPassword4" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="inputEmail4" name="names">
                          </div>
                          <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="inputPassword4" name="lastnames">
                          </div>
                        <div class="col-md-6">
                          <label for="inputCity" class="form-label">Documento</label>
                          <input type="text" class="form-control" id="inputCity" name="document">
                        </div>
                        <div class="col-md-4">
                          <label for="inputState" class="form-label">Rol</label>
                          <select id="inputState" class="form-select" name="rol">
                            <option selected>Seleccione un rol</option>
                            <option value="super-admin">super-admin</option>
                            <option value="admin">admin</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="inputState" class="form-select" name="state">
                              <option selected>Seleccione un estado</option>
                              <option value="1">Activo</option>
                              <option value="0">Inactivo</option>
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
