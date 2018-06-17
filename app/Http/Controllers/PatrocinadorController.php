<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patrocinador;
use App\persona;
use App\pais;
use App\usuario;
use App\usuarioPerfil;
use App\perfil;
use DB;
use DateTime;

class PatrocinadorController extends Controller
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
        $pais = pais::all();
        return view('Patrocinador/RegistrarPatrocinador',compact('pais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $patrocinador = new patrocinador;
        $persona = new persona;
        $user = new usuario;
        $userp = new usuarioPerfil;
        $perfilPatrocinador = perfil::where('nombrePerfil','=','Patrocinador')->get()->first();

        $persona->nombre = $request->Nombre;
        $persona->apellido = $request->Apellido;
        $persona->idPais = $request->Pais;
        $persona->email = $request->Email;
        $persona->save();
        //dd($persona);
        $patrocinador->idPatrocinador = $persona->id;
        $patrocinador->nombreEmpresa = $request->Empresa;
        $patrocinador->save();

        $user->idUsuario = $persona->id;
        $user->nick = $request->NombreUsuario;
        $user->password = $request->Password;
        $user->fechaRegistro = new DateTime();
        $user->tipoCuenta = 'Free';
        $user->save();

        $userp->idUsuario = $persona->id;
        $userp->idPerfil = $perfilPatrocinador->idPerfil;
        $userp->save();

        return redirect()->action('InicioController@create');

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
