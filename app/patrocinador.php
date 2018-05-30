<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patrocinador extends Model
{
	protected $table='patrocinador';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idPatrocinador';
    public $timestamps = false;
}
