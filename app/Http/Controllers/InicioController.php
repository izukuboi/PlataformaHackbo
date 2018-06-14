<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proyecto;
use App\patrocinador;
use App\consultor;
use App\cliente;
use App\emprendedor;
use Session;

class InicioController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        $proyecto = proyecto::take(3)->get();
        $patrocinador = new patrocinador;
        $consultor = new consultor;
        $cliente = new cliente;
        $emprendor = new emprendedor;
        if($patrocinador->where('idPatrocinador',Session::get('InicioSesion','caca'))->exists())
        {   
            return view('Inicio/InicioPatrocinador',compact('proyecto'));
        }
        else
        {
            if($consultor->where('idConsultor',Session::get('InicioSesion','caca'))->exists())
            {   
                return view('Inicio/InicioConsultor',compact('proyecto'));
            }
            else
            {
                if($cliente->where('idCliente',Session::get('InicioSesion','caca'))->exists())
                {   
                    return view('Inicio/InicioCliente',compact('proyecto'));
                }
                else
                {
                    if($cliente->where('idEmprendedor',Session::get('InicioSesion','caca'))->exists())
                    {   
                        return view('Inicio/InicioEmprendedor',compact('proyecto'));
                    }
                    else
                    {
                        echo 'nani';
                    }
                }
            }
        }

        //return view('Inicio/pagprin',compact('proyecto'));
    }
}
