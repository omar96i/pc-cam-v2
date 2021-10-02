<?php

namespace App\Http\Controllers\Computadores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComputadoresController extends Controller
{
    public function index(){
        return view('computadores.index');
    }
}
