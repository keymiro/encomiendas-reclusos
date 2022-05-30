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
            'type_document_id'=>$request['inputTypeDocument'],
            'document'  =>$request['inputDocument'],
            'code_recluse'=>$request['inputCodeRecluso'],
            'sex' =>$request['inputSexo'],
            'name_recluse'=>$request['inputNames'],
            'surname_recluse'  =>$request['inputSurName'],
            'pavilions_id'    =>$request['inputPavilion'],
            'jailcells'    =>$request['inputNumberCell'],
            'state'    =>$request['inputState'],
            'user_create_id'      =>auth()->user()->id,
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
        'type_document_id'=>$request['inputTypeDocument'],
        'document'  =>$request['inputDocument'],
        'code_recluse'=>$request['inputCodeRecluso'],
        'sex' =>$request['inputSexo'],
        'name_recluse'=>$request['inputNames'],
        'surname_recluse'  =>$request['inputSurName'],
        'pavilions_id'    =>$request['inputPavilion'],
        'jailcells'    =>$request['inputNumberCell'],
        'state'    =>$request['inputState'],
        'user_edit_id'      =>auth()->user()->id]);
        return back()->with('notification','Recluso actualizado correctamente');
    }
    public function show($id)
    {
        $Rc = Recluse::findOrFail($id);
        return view('reclusos.show')->with(compact('Rc'));
    }

    public function recluseSearch(Request $request){
        $search =$request['inputCodeRecluse'];
        $recluse = Recluse::where('code_recluse',$search)->first();

        if(isset($recluse)){
            return response()->json(['recluse'=>$recluse,
                                     'state'=>200
                                    ]);

        }else{
            return response()->Json(['message'=>'No existe el registro que esta tratando de buscar.']);
        }


    }
}
