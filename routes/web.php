<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\GeneroController;
Use App\Http\Controllers\CategoriaController;
Use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TallaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndexadminController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\Productodoscontrolador;
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

//  Rutas de Tipo de Documento

Route::get('tipo_documento',[TipoDocumentoController::class,'index'])->name('tipo_documento.index');

Route::get('tipo_documento/create',[TipoDocumentoController::class,'create'])->name('tipo_documento.create');
Route::post('tipo_documento',[TipoDocumentoController::class,'store'])->name('tipo_documento.store');
Route::get('tipo_documento/{id}',[TipoDocumentoController::class,'show'])->name('tipo_documento.show');
Route::get('tipo_documento/edit/{id}',[TipoDocumentoController::class,'edit'])->name('tipo_documento.edit');
Route::put('tipo_documento/{id}',[TipoDocumentoController::class,'update'])->name('tipo_documento.update');
Route::delete('tipo_documento/{id}',[TipoDocumentoController::class,'destroy'])->name('tipo_documento.destroy');

//Routes of Rol

Route::get('rol',[RolController::class,'index'])->name('rol.index');
Route::get('rol/rol',[RolController::class,'create'])->name('rol.create');
Route::post('rol',[RolController::class,'store'])->name('rol.store');
Route::get('rol/{id}',[RolController::class,'show'])->name('rol.show');
Route::get('rol/edit/{id}',[RolController::class,'edit'])->name('rol.edit');
Route::put('rol/{id}',[RolController::class,'update'])->name('rol.update');
Route::delete('rol/{id}',[RolController::class,'destroy'])->name('rol.destroy');

//genero
Route::get('genero',[GeneroController::class,'index'])->name('genero.index');
Route::get('genero/genero',[GeneroController::class,'create'])->name('genero.create');
Route::post('genero',[GeneroController::class,'store'])->name('genero.store');
Route::get('genero/{id}',[GeneroController::class,'show'])->name('genero.show');
Route::get('genero/edit/{id}',[GeneroController::class,'edit'])->name('genero.edit');
Route::put('genero/{id}',[GeneroController::class,'update'])->name('genero.update');
Route::delete('genero/{id}',[GeneroController::class,'destroy'])->name('genero.destroy');

//index
    Route::get('/',[IndexController::class,'index'])->name('index.index');
    Route::get('/administrador',[IndexadminController::class,'index'])->name('index.admin');

// Categoria

Route::get('categoria',[CategoriaController::class,'index'])->name('categoria.index');
Route::get('categoria/create',[CategoriaController::class,'create'])->name('categoria.create');
Route::post('categoria',[CategoriaController::class,'store'])->name('categoria.store');
Route::get('categoria/{id}',[CategoriaController::class,'show'])->name('categoria.show');
Route::get('categoria/edit/{id}',[CategoriaController::class,'edit'])->name('categoria.edit');
Route::put('categoria/{id}',[CategoriaController::class,'update'])->name('categoria.update');
Route::delete('categoria/{id}',[CategoriaController::class,'destroy'])->name('categoria.destroy');

// Clasificación

Route::get('clasificacion',[ClasificacionController::class,'index'])->name('clasificacion.index');
Route::get('clasificacion/create',[ClasificacionController::class,'create'])->name('clasificacion.create');
Route::post('clasificacion',[ClasificacionController::class,'store'])->name('clasificacion.store');
Route::get('clasificacion/{id}',[ClasificacionController::class,'show'])->name('clasificacion.show');
Route::get('clasificacion/edit/{id}',[ClasificacionController::class,'edit'])->name('clasificacion.edit');
Route::put('clasificacion/{id}',[ClasificacionController::class,'update'])->name('clasificacion.update');
Route::delete('clasificacion/{id}',[ClasificacionController::class,'destroy'])->name('clasificacion.destroy');

// Material
Route::get('material',[MaterialController::class,'index'])->name('material.index');
Route::get('material/create',[MaterialController::class,'create'])->name('material.create');
Route::post('material',[MaterialController::class,'store'])->name('material.store');
Route::get('material/{id}',[MaterialController::class,'show'])->name('material.show');
Route::get('material/edit/{id}',[MaterialController::class,'edit'])->name('material.edit');
Route::put('material/{id}',[MaterialController::class,'update'])->name('material.update');
Route::delete('material/{id}',[MaterialController::class,'destroy'])->name('material.destroy');

//usuario

Route::get('usuario',[UsuarioController::class,'index'])->name('usuario.index');
Route::get('usuario/create',[UsuarioController::class,'create'])->name('usuario.create');
Route::post('usuario',[UsuarioController::class,'store'])->name('usuario.store');
Route::get('usuario/{id}',[UsuarioController::class,'show'])->name('usuario.show');
Route::get('usuario/edit/{id}',[UsuarioController::class,'edit'])->name('usuario.edit');
Route::put('usuario/{id}',[UsuarioController::class,'update'])->name('usuario.update');
Route::delete('usuario/{id}',[UsuarioController::class,'destroy'])->name('usuario.destroy');
Route::get('usuario/rol/{id}',[UsuarioController::class,'editrol'])->name('usuario.editrol');


//Login

Route::get('login',[LoginController::class,'login'])->name('login.login');
Route::post('login/authenticate',[LoginController::class,'authenticate'])->name('login.authenticate');

//Producto - talla

Route::get('talla',[TallaController::class,'index'])->name('talla.index');
Route::get('talla/create',[TallaController::class,'create'])->name('talla.create');
Route::post('talla',[TallaController::class,'store'])->name('talla.store');
Route::get('talla/{id}',[TallaController::class,'show'])->name('talla.show');
Route::get('talla/edit/{id}',[TallaController::class,'edit'])->name('talla.edit');
Route::put('talla/{id}',[TallaController::class,'update'])->name('talla.update');
Route::delete('talla/{id}',[TallaController::class,'destroy'])->name('talla.destroy');

//producto
Route::get('productodos',[ProductodosControlador::class,'index'])->name('productodos.index');
Route::get('productodos/{id}',[ProductodosControlador::class,'show'])->name('productodos.show');

Route::get('producto',[ProductoController::class,'index'])->name('producto.index');
Route::get('producto/create',[ProductoController::class,'create'])->name('producto.create');
Route::post('producto',[ProductoController::class,'store'])->name('producto.store');
Route::get('producto/{id}',[ProductoController::class,'show'])->name('producto.show');
Route::get('producto/edit/{id}',[ProductoController::class,'edit'])->name('producto.edit');
Route::put('producto/{id}',[ProductoController::class,'update'])->name('producto.update');
Route::delete('producto/{id}',[ProductoController::class,'destroy'])->name('producto.destroy');

//color
Route::get('color',[ColorController::class,'index'])->name('color.index');
Route::get('color/create',[ColorController::class,'create'])->name('color.create');
Route::post('color',[ColorController::class,'store'])->name('color.store');
Route::get('color/{id}',[ColorController::class,'show'])->name('color.show');
Route::get('color/edit/{id}',[ColorController::class,'edit'])->name('color.edit');
Route::put('color/{id}',[ColorController::class,'update'])->name('color.update');
Route::delete('color/{id}',[ColorController::class,'destroy'])->name('color.destroy');

