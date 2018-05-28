<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emprendedor extends Model
{
    protected $table='emprendedor';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idEmprendedor';
    public $timestamps = false;
}
