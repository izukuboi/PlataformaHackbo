<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estadoconsultoria extends Model
{
    protected $table='estadoconsultoria';
    protected $primarykey='idEstadoConsultoria';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
