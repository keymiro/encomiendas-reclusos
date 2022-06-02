<?php

namespace App\Http\Controllers;

use App\Mail\MessageEncomienda;
use App\Models\Encomienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class EncomiendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('ecomiendas.index');
    }
    public function create()
    {
        return view('ecomiendas.create');
    }
    public function store(Request $request){
        $url= $request->file('file')->store('public/evidences');
           $encomienda = Encomienda::create([
            'type_document_send'    =>$request['inputTypeDocument'],
            'document_send'         =>$request['inputDocument'],
            'names_send'            =>$request['inputNames'],
            'email_send'            =>$request['email'],
            'accepted_objects'      =>$request['accepted_objects'],
            'declined_objects'      =>$request['declined_objects'],
            'declined_observations' =>$request['declined_observations'],
            'url_img'               =>$url,
            'recluse_id'            =>$request['recluseId'],
            'user_created_id'       =>auth()->user()->id,
        ]);

        return redirect()->route('ecomienda.show', ['id'=>$encomienda->id]);

    }
    public function show($id){
        $encomienda = Encomienda::findOrFail($id);
        return view('ecomiendas.show')->with(compact('encomienda'));
    }

    public function edit($id){
        $encomienda = Encomienda::findOrFail($id);
        return view('ecomiendas.edit')->with(compact('encomienda'));
    }

    public function update(Request $request ,$id){

        $encomienda = Encomienda::findOrFail($id);

        if ($request->hasFile('file'))
        {
            Storage::delete($encomienda->url);
            $url= $request->file('file')->store('public/control');
        }else{
            $url=$encomienda->ur_img;
        }

        $encomienda->update([
            'type_document_send'    =>$request['inputTypeDocument'],
            'document_send'         =>$request['inputDocument'],
            'names_send'            =>$request['inputNames'],
            'email_send'            =>$request['email'],
            'accepted_objects'      =>$request['accepted_objects'],
            'declined_objects'      =>$request['declined_objects'],
            'declined_observations' =>$request['declined_observations'],
            'url_img'               =>$url,
            'recluse_id'            =>$request['recluseId'],
            'user_created_id'       =>auth()->user()->id,
        ]);

        return back()->with('notification','Encomienda actualizada correctamente');
    }
    public function encomiendasAjax()
    {
    //    composer require yajra/laravel-datatables-oracle : para retornar los datos como pide datatables
        $encomiendas = Encomienda::with('recluse')->latest()->get();
        return datatables()
            ->of( $encomiendas)
            ->addColumn('btn', 'layouts.btn-action-encomienda')
            ->rawColumns(['btn'])
            ->toJson();
    }

    public function email($id){
        $encomienda = Encomienda::with('recluse')->findOrFail($id);
        $enco = [
                 'td_recluse'       =>$encomienda->recluse->code_recluse,
                 'cod'              =>$encomienda->cod,
                 'accepted_objects' =>$encomienda->accepted_objects,
                 'declined_objects' =>$encomienda->declined_objects,
                 'declined_observations' =>$encomienda->declined_observations,
                 'created_at'            =>$encomienda->created_at

                ];
      $mail=  Mail::to("$encomienda->email_send")->send(new MessageEncomienda($enco));
    return response('detalle encomienda enviada correctamente');

    }

    public function updateCode(Request $request){
     $vardos = $request['id_encomienda'];
        $var = encomienda::findOrFail($vardos);
        $var->update(['cod'=>'']);

    }







}
