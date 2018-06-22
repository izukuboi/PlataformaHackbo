<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class perfil extends Model
{
    //
    protected $table='perfil';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idPerfil';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
