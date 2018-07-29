<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalleequipoemprendedor extends Model
{
    protected $table='detalleequipoemprendedor';
    protected $primarykey='idDetalleEquipoEmprendedor';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
}
