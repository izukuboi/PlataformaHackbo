<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detallecompra extends Model
{
    protected $table='detallecompra';
    protected $primarykey='idDetalleCompra';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
}
