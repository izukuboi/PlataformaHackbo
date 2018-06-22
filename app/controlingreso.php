<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class controlingreso extends Model
{
    protected $table='controlingresos';
    protected $primarykey='idControlDeIngresos';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
