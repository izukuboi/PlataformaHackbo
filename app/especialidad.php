<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class especialidad extends Model
{
	protected $table='especialidad';
    protected $primarykey='idEspecialidad';
    public $timestamps = false;
}
