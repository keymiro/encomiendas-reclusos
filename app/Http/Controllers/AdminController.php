<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.index');
    }
    public function usersAjax()
    {
    //    composer require yajra/laravel-datatables-oracle : para retornar los datos como pide datatables
        $users = User::latest();
        return datatables()
            ->of($users)
            ->addColumn('btn', 'layouts.btn-actions-admin')
            ->rawColumns(['btn'])
            ->toJson();
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        User::create($request->all());
        return back()->with('notification','Registro creado correctamente');
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.show')->with(compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit')->with(compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return back()->with('notification','Registro actualizado correctamente');
    }
    public function destroy($id)
    {
            $User = User::findOrFail($id);

            if ($User->state =='activo') {

                $User->update(['state'=>'inactivo',]);

                return back()->with('notification','Registro inactivado correctamente.');
            }else{

                $User->update(['state'=>'activo']);

                return back()->with('notification','Registro activado correctamente.');
            }

    }

}
