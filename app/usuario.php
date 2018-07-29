<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuario extends Model
{
    //use SoftDeletes;
	protected $table='usuario';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idUsuario';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];

}
