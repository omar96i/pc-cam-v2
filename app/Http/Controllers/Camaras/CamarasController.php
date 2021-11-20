<?php

namespace App\Http\Controllers\Camaras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CamarasController extends Controller
{
    public function index(){
        return view('camaras.index');
    }
}
