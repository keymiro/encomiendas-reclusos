<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ReclusoController extends Controller
{
    public function index()
    {
        return view('reclusos.create');
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        recluse::create($request->all());
        return back()->with('notification','Registro creado correctamente');
    }
    public function show()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }
}
