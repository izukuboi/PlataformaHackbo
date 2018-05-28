<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use App\emprendedor;
use App\persona;
use App\pais;
use App\usuario;
use App\usuarioPerfil;
use App\perfil;
use DB;
use DateTime;

class EmprendedorController extends Controller
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
        return view('Emprendedor/RegistrarEmprendedor',compact('pais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $emp = new emprendedor;
        $persona = new persona;
        $user = new usuario;
        $userp = new usuarioPerfil;
        $perfilCli = perfil::where('nombrePerfil','=','Emprendedor')->get()->first();

        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->idPais = $request->pais;
        $persona->email = $request->email;
        $persona->save();
        //dd($persona);
        $emp->idEmprendedor = $persona->id;
        $emp->save();

        $user->idUsuario = $persona->id;
        $user->nick = $request->nick;
        $user->password = $request->password;
        $user->fechaRegistro = new DateTime();
        $user->tipoCuenta = 'Free';
        $user->save();

        $userp->idUsuario = $persona->id;
        $userp->idPerfil = $perfilCli->idPerfil;
        $userp->save();

        return 'Emprendedor '.$request->nombre.' registrado';
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
