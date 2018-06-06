<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipoemprendedor extends Model
{
    //
    protected $table='equipoemprendedor';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idEquipoEmprendedor';
    public $timestamps = false;
}
