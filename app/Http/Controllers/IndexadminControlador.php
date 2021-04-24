<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexadminControlador extends Controller
{
    public function index(){
        return view('indexadmin');
    }
}
