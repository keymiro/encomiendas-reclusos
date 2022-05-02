<?php

namespace App\Http\Controllers;

use App\Models\Recluse;
use Illuminate\Http\Request;

class RecluseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('reclusos.index');
    }
    public function create()
    {
        return view('reclusos.create');
    }
    public function store(Request $request)
    {
        $document = Recluse::create([
            'idtypedocument'=>$request['inputTypeDocument'],
            'document'  =>$request['inputDocument'],
            'coderecluse'=>$request['inputCodeRecluso'],
            'sex' =>$request['inputSexo'],
            'namerecluse'=>$request['inputNames'],
            'surnamerecluse'  =>$request['inputSurName'],
            'idpavilions'    =>$request['inputPavilion'],
            'jailcells'    =>$request['inputNumberCell'],
            'state'    =>$request['inputState'],
            'idusercreate'      =>auth()->user()->id,
        ]);

        return back()->with('notification','Recluso creado correctamente');
    }

    public function ReclusosAjax()
    {
    //    composer require yajra/laravel-datatables-oracle : para retornar los datos como pide datatables
        $users = Recluse::latest()->get();
        return datatables()
            ->of($users)
            ->addColumn('btn', 'layouts.btn-action-recluso')
            ->rawColumns(['btn'])
            ->toJson();
    }
    public function edit($id)
    {
        $Rc = Recluse::findOrFail($id);
        return view('reclusos.edit')->with(compact('Rc'));
    }
    public function update(Request $request, $id)
    {
        $Rc = Recluse::findOrFail($id);
        $Rc->update([
        'idtypedocument'=>$request['inputTypeDocument'],
        'document'  =>$request['inputDocument'],
        'coderecluse'=>$request['inputCodeRecluso'],
        'sex' =>$request['inputSexo'],
        'namerecluse'=>$request['inputNames'],
        'surnamerecluse'  =>$request['inputSurName'],
        'idpavilions'    =>$request['inputPavilion'],
        'jailcells'    =>$request['inputNumberCell'],
        'state'    =>$request['inputState'],
        'iduseredit'      =>auth()->user()->id]);
        return back()->with('notification','Recluso actualizado correctamente');
    }
    public function show($id)
    {
        $Rc = Recluse::findOrFail($id);
        return view('reclusos.show')->with(compact('Rc'));
    }
}
