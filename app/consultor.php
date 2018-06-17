<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class consultor extends Model
{//meli
    protected $table='consultor';
    protected $primarykey='idConsultor';
    public $timestamps = false;
}
