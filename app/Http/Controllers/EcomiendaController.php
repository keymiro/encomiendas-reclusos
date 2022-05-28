<?php

namespace App\Http\Controllers;

use App\Models\Ecomienda;
use Illuminate\Http\Request;

class EcomiendaController extends Controller
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
}
