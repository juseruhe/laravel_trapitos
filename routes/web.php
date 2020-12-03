<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TipoDocumentoController;

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
    return view('welcome');
});



//  Rutas de Tipo de Documento

Route::get('tipo_documento',[TipoDocumentoController::class,'index'])->name('tipo_documento.index');
Route::get('tipo_documento/create',[TipoDocumentoController::class,'create'])->name('tipo_documento.create');
Route::post('tipo_documento',[TipoDocumentoController::class,'store'])->name('tipo_documento.store');
Route::get('tipo_documento/{id}',[TipoDocumentoController::class,'show'])->name('tipo_documento.show');
Route::get('tipo_documento/edit/{id}',[TipoDocumentoController::class,'edit'])->name('tipo_documento.edit');
Route::put('tipo_documento/{id}',[TipoDocumentoController::class,'update'])->name('tipo_documento.update');
Route::delete('tipo_documento/{id}',[TipoDocumentoController::class,'destroy'])->name('tipo_documento.destroy');