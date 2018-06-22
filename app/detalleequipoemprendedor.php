<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleequipoemprendedor extends Model
{
    protected $table='detalleequipoemprendedor';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idEquipoEmprendedor';
    public $timestamps = false;
}
