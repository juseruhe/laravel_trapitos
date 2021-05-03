<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class Productodoscontrolador extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productodos', compact('productos'));
    }

    public function card(){
        return view('cart.index');

    }
}
