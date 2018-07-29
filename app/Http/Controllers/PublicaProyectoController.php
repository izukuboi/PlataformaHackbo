<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personarelacionada;
use App\relacion;
use App\tipocredito;
use App\tipogarantia;
use App\condicionescreditos;
use App\detallepersonasolicitud;
use App\amortizacion;
use App\solicitud;
use App\persona;
use DateTime;
use Session;


class PublicaProyectoController extends Controller
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
        
        return view('PublicaProyecto/PublicaProyecto');
    }
    public function store(Request $request)
    {
        $personarelacionada =   new personarelacionada;
        $relacion   =   new relacion;
        $tipocredito    =   new tipocredito;
        $tipogarantia   =   new tipogarantia;
        $condicionescreditos    =   new condicionescreditos;
        $detallepersonasolicitud    =   new detallepersonasolicitud;
        $amortizacion   =   new amortizacion;
        $persona    =   new persona;
        $solicitud = new solicitud;

        

        $condicionescreditos->Monto =  $request->Monto;
        $condicionescreditos->FechaPago =   $request->FechaPago;
        $condicionescreditos->Plazo =   new DateTime();
        //si la vista me devuelve el id de amortizacion
        //puedo meterlo simplemente, sino
        //necesito buscar en el modelo para que me devuela su id
        //directo $condicionescreditos->idAmortizacion = $request->Amortizacion; 
        //buscando en modelo $amortizacionD = $amortizacion::where('TipoAmortizacion','=',$request->Amortizacion)->get()->first();
        //$condicionescreditos->idAmortizacion = $amortizacionD->idAmortizacion;
        


        $idsolicitante = Session::get('InicioSesion',0);
        $solicitud->idPersonaS = $idsolicitante;
        $solicitud->FechaInicio =   new DateTime();
        $solicitud->idTipoCredito   =   $request->TipoCredito;




    }
}
