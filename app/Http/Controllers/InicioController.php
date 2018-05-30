<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proyecto;

class InicioController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        $proyecto = proyecto::take(3)->get();
        return view('Inicio/pagprin',compact('proyecto'));
    }
}
