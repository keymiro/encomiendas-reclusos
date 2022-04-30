@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">Edición</div>
                <div class="card-body">
                    <form class="row g-3>
                        @csrf
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Email</label>
                          <input type="email" class="form-control" readonly required id="inputEmail4" name="email" value="{{$user->email}}">
                        </div>
                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" readonly required id="inputPassword4" name="password" value="{{$user->password}}">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Nombres</label>
                            <input type="text" class="form-control" readonly required id="inputEmail4" name="names" value="{{$user->names}}">
                          </div>
                          <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" readonly required id="inputPassword4" name="lastnames" value="{{$user->lastnames}}">
                          </div>
                        <div class="col-md-6">
                          <label for="inputCity" class="form-label">Documento</label>
                          <input type="text" class="form-control" readonly required id="inputCity" name="document" value="{{$user->document}}">
                        </div>
                        <div class="col-md-4">
                          <label for="inputState" class="form-label">Rol</label>
                          <select id="inputState" class="form-select" name="rol" disabled required>
                            <option selected value="{{$user->rol}}">{{$user->rol}}</option>
                            <option value="super-admin">super-admin</option>
                            <option value="admin">admin</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="inputState" class="form-select" name="state" disabled required>
                              <option selected value="{{$user->state}}">{{$user->state}}</option>
                              <option value="activo">activo</option>
                              <option value="inactivo">inactivo</option>
                            </select>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
