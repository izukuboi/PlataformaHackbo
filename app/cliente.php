<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table='cliente';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idCliente';
    public $timestamps = false;
}
