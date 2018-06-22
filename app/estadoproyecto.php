<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estadoproyecto extends Model
{
    protected $table='estadoproyecto';
    protected $primarykey='idEstadoProyecto';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
