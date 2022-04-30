<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReclusoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);
Route::get('/',[HomeController::class,'login'])->name('login.view');
Route::get('Admin/create',[AdminController::class,'create'])->name('admin.create');
Route::post('Admin/create',[AdminController::class,'store'])->name('admin.store');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/recluso/create',[ReclusoController::class,'index'])->name('recluso.create');
Route::post('/recluso/create',[ReclusoController::class,'store'])->name('recluso.store');

