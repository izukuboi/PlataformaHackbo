<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentoGe extends Model
{
    protected $table='DocumentoGenerales';
	//protected $dates = ['deleted_at'];
    protected $primarykey='IdDocumentoGeneral';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
}
