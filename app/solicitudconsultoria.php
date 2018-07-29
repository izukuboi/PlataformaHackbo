<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class solicitudconsultoria extends Model
{
    protected $table='solicitudconsultoria';
    protected $primarykey='idSolicitudConsultoria';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
}
