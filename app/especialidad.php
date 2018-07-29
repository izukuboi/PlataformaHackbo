<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class especialidad extends Model
{
	protected $table='especialidad';
    protected $primarykey='idEspecialidad';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
}
