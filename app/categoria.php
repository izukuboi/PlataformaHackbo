<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //
    protected $table='categoria';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idCategoria';
    public $timestamps = false;
}
