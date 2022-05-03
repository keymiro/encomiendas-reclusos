@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Dato del Usuario ') }}{{$user->names}}</div>
                <div class="card-body">
                    <form class="row g-3">

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
                          @if($user->rol=="super-admin")
                            <option value="super-admin">super-admin</option>
                            <option value="admin">admin</option>
                            @else
                            <option value="admin">admin</option>
                            <option value="super-admin">super-admin</option>
                            @endif
                          </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="inputState" class="form-select" name="state" disabled required>
                              @if($user->state=="Activo")
                              <option value="Activo">Activo</option>
                              <option value="Inactivo">Inactivo</option>
                            @else
                              <option value="Inactivo">Inactivo</option>
                              <option value="Activo">Activo</option>
                            @endif
                            </select>
                            </select>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
