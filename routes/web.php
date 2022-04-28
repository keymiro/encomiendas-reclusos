<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('Admin/index',[AdminController::class,'index'])->name('admin.index');
Route::get('Admin/index/usersAjax',[AdminController::class,'usersAjax'])->name('admin.usersAjax');
Route::get('Admin/create',[AdminController::class,'create'])->name('admin.create');
Route::post('Admin/create',[AdminController::class,'store'])->name('admin.store');
Route::get('Admin/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
Route::patch('Admin/update/{id}',[AdminController::class,'update'])->name('admin.update');
Route::get('Admin/show/{id}',[AdminController::class,'show'])->name('admin.show');
Route::get('Admin/inactive/{id}',[AdminController::class,'destroy'])->name('admin.destroy');
Route::get('/home', [HomeController::class, 'index'])->name('home');
