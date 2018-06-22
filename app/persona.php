<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class persona extends Model
{
    //use SoftDeletes;
	protected $table='persona';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idPersona';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
