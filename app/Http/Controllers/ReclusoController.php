<?php

namespace App\Http\Controllers;

use App\Models\recluse;
use App\Models\typedoc;
use App\Models\pavilion;
use Illuminate\Http\Request;

class ReclusoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Us = session('UserId');
        $TD = typedoc::all();
        $PB = pavilion::all();
        return view('reclusos.create')->with(compact('TD','PB','Us'));
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
        $Us = session('UserId');
        $TD = typedoc::all();
        $PB = pavilion::all();
        $Rc = recluse::all();
        return view('reclusos.show')->with(compact('Rc','TD','PB','Us'));
    }
    public function edit()
    {

    }
    public function update(Request $request, $idr)
    {
        $dt = recluse::findOrFail($idr);
        $dt->update($request->all());
        return back()->with('notification','Registro actualizado correctamente');
    }
    public function destroy()
    {

    }
}
