<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class producto extends Model
{
    protected $table='producto';
    protected $primarykey='idProducto';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
