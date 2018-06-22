<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarioPerfil extends Model
{
    protected $table='usuarioperfil';
	//protected $dates = ['deleted_at'];
    //protected $primarykey='idCliente';
    public $timestamps = false;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
