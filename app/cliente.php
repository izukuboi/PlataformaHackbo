<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    protected $table='cliente';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
	//protected $dates = ['deleted_at'];
    protected $primarykey='idCliente';
    //public $timestamps = false;
}
