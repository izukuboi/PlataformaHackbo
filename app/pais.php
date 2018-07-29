<?php
//php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pais extends Model
{
	//use SoftDeletes;
	protected $table='pais';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idPais';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
			
}
