<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categoria extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='categoria';
    
    protected $primarykey='idCategoria';
    //public $timestamps = false;
}
