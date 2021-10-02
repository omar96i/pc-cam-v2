<?php

namespace App\Http\Controllers\Redes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedesController extends Controller
{
    public function index(){
        return view('redes.index');
    }
}
