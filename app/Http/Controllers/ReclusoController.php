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
        $document = recluse::create([
            'title'=>$request['title'],
            'idtypedocument'=>$request['idtypedocument'],
            'document'  =>$request['document'],
            'coderecluse'=>$request['coderecluse'],
            'sex' =>$request['sex'],
            'namerecluse'=>$request['namerecluse'],
            'surnamerecluse'  =>$request['surnamerecluse'],
            'idpavilions'    =>$request['idpavilions'],
            'jailcells'    =>$request['jailcells'],
            'state'    =>$request['state'],
            'idusercreate'      =>auth()->user()->id,
        ]);

        return back()->with('notification','Registro creado correctamente');
    }
    public function show()
    {
        $TD = typedoc::all();
        $PB = pavilion::all();
        $Rc = recluse::all();
        return view('reclusos.show')->with(compact('Rc','TD','PB'));
    }
    public function edit()
    {

    }
    public function update(Request $request, $idr)
    {
        $dt = recluse::findOrFail($idr);
        $dt -> update([
            'title'=>$request['title'],
            'idtypedocument'=>$request['idtypedocument'],
            'document'  =>$request['document_edit'],
            'coderecluse'=>$request['coderecluse'],
            'sex' =>$request['sex'],
            'namerecluse'=>$request['namerecluse'],
            'surnamerecluse'  =>$request['surnamerecluse'],
            'idpavilions'    =>$request['idpavilions'],
            'jailcells'    =>$request['jailcells'],
            'state'    =>$request['state'],
            'iduseredit'      =>auth()->user()->id,
        ]);
        return back()->with('notification','Registro actualizado correctamente');
    }
    public function destroy()
    {

    }
}
