<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecluseController;
use App\Http\Controllers\EcomiendaController;
use Illuminate\Routing\Router;

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

//
Route::get('/recluso/search',[RecluseController::class,'recluseSearch'])->name('recluso.search');
Route::get('/recluso/index',[RecluseController::class,'index'])->name('recluso.index');
Route::get('/recluso/create',[RecluseController::class,'create'])->name('recluso.create');
Route::post('/recluso/create',[RecluseController::class,'store'])->name('recluso.store');
Route::get('/recluso/ReclusosAjax',[RecluseController::class,'ReclusosAjax'])->name('recluso.ReclusosAjax');
Route::get('/recluso/edit/{id}',[RecluseController::class,'edit'])->name('recluso.edit');
Route::patch('/recluso/update/{id}',[RecluseController::class,'update'])->name('recluso.update');
Route::get('/recluso/show/{id}',[RecluseController::class,'show'])->name('recluso.show');

//
Route::get('/ecomienda/index',[EcomiendaController::class,'index'])->name('ecomienda.index');
Route::get('/ecomienda/create',[EcomiendaController::class,'create'])->name('ecomienda.create');
Route::post('/ecomienda/create',[EcomiendaController::class,'store'])->name('ecomienda.store');
Route::get('/ecomienda/ReclusosAjax',[RecluseController::class,'ReclusosAjax'])->name('ecomienda.ReclusosAjax');
Route::get('/ecomienda/edit/{id}',[RecluseController::class,'edit'])->name('ecomienda.edit');
Route::patch('/ecomienda/update/{id}',[RecluseController::class,'update'])->name('ecomienda.update');
Route::get('/ecomienda/show/{id}',[RecluseController::class,'show'])->name('ecomienda.show');

//
Route::post('/ecomienda/print',[PrintController::class,'print'])->name('ecomienda.print');





