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
