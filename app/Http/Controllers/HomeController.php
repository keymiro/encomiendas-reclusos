<?php

namespace App\Http\Controllers;

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
        
        return view('home')->with(compact('user'));
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
