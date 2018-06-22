<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    
    protected $table='proyecto';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idProyecto';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
