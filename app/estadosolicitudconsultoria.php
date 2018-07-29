<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estadosolicitudconsultoria extends Model
{
    protected $table='estadosolicitudconsultoria';
    protected $primarykey='idEstadoSolicitudConsultoria';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
}
