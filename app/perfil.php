<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    //
    protected $table='perfil';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idPerfil';
    public $timestamps = false;
}
