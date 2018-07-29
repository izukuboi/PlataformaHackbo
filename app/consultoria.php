<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class consultoria extends Model
{
    protected $table='consultoria';
    protected $primarykey='idConsultoria';
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
}
