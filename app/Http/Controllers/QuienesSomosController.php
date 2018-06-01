<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Quienes_Somos/QuienesSomos');
    }
}
