<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;
use App\emprendedor;
use Session;
use App\equipoemprendedor;
use App\detalleequipoemprendedor;

class RegistrarProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $emprendor = new emprendedor;
        $equipo = new detalleequipoemprendedor;
        
        if($emprendor->where('idEmprendedor',Session::get('InicioSesion',0))->exists())
        {   
            if($equipo->where('idEmprendedor',Session::get('InicioSesion',0))->exists())
            {   
                
                $categoria = categoria::all();
                //dd($categoria);
                $equipoemprendedor = equipoemprendedor::all();
                return view('PublicaProyecto/PublicaProyecto',compact('categoria','equipoemprendedor'));
            }
                else
                    {
                        return redirect()->action('InicioController@create');
                    }
        }
        else {
            return redirect()->action('InicioController@create');
        }
/*         $categoria = categoria::all();
        //dd($categoria);
        $equipoemprendedor = equipoemprendedor::all();
        return view('PublicaProyecto/PublicaProyecto',compact('categoria','equipoemprendedor'));
        // */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
