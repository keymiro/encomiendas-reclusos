<?php

namespace App\Http\Controllers;

use App\Models\Encomienda;
use App\Models\Recluse;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::count();
        $recluse = Recluse::count();
        $encomienda = Encomienda::count();

        return view('home')->with(compact('user','recluse','encomienda'));
    }
    public function login()
    {
        if (auth()->check())
        {
           return redirect()->route('home');

        }
            return redirect()->route('login.view');
    }
}
