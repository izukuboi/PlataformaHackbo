<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class equipoemprendedor extends Model
{
    //
    protected $table='equipoemprendedor';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idEquipoEmprendedor';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
}
