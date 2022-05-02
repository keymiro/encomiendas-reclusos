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
    public function show()
    {
        return view('reclusos.show');
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
}
