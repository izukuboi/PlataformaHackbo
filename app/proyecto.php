<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    
    protected $table='proyecto';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idProyecto';
    public $timestamps = false;
}
