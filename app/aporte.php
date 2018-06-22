<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class aporte extends Model
{
    protected $table='aporte';
    protected $primarykey='idAporte';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
