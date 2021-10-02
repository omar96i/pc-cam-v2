<?php

namespace App\Http\Controllers\Impresoras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImpresorasController extends Controller
{
    public function index(){
        return view('impresoras.index');
    }
}
