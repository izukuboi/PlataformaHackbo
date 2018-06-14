<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consultor;
use App\persona;
use App\pais;
use App\usuario;
use App\usuarioPerfil;
use App\perfil;
use App\especialidad;
use DB;
use DateTime;

class ConsultorController extends Controller
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
        $especialidad = especialidad::all();
        return view('Consultor/RegistrarConsultor',compact('pais','especialidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->NombreUsuario);
        $consultor = new consultor;
        $persona = new persona;
        $user = new usuario;
        $userp = new usuarioPerfil;
        $perfilCon = perfil::where('nombrePerfil','=','Consultor')->get()->first();

        $persona->nombre = $request->Nombre;
        $persona->apellido = $request->Apellido;
        $persona->idPais = $request->Pais;
        $persona->email = $request->Email;
        $persona->save();
        //dd($persona);
        $consultor->idConsultor = $persona->id;
        $consultor->idEspecialidad = $request->Especialidad;
        //$consultor->CV = $request->CV;
        $consultor->tarifaConsultoria = $request->TarifaConsultoria;
        $consultor->descripcion = $request->Descripcion;
        $consultor->save();
        
        $user->idUsuario = $persona->id;
        $user->nick = $request->NombreUsuario;
        $user->password = $request->Password;
        $user->fechaRegistro = new DateTime();
        $user->tipoCuenta = 'Free';
        $user->save();
        //dd($user);

        $userp->idUsuario = $persona->id;
        $userp->idPerfil = $perfilCon->idPerfil;
        $userp->save();

        return redirect()->action('LoginController@create');
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
