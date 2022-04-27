<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        User::create($request->all());

        return back()->with('notification','Registro creado correctamente');
    }
    public function show()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }

}
