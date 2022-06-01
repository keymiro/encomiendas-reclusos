<?php

namespace App\Http\Controllers;

use App\Models\Encomienda;
use Illuminate\Http\Request;

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

        return back()->with('notification','encomienda creada correctamente');

    }
}
