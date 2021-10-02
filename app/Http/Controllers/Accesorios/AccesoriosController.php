<?php

namespace App\Http\Controllers\Accesorios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccesoriosController extends Controller
{
    public function index(){
        return view('accesorios.index');
    }
}
