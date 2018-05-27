<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    //use SoftDeletes;
	protected $table='cliente';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idCliente';
    public $timestamps = false;
			

	/* public function unidadmedida(){
		return $this->belongsTo('App\Unidadmedida','IdUnidadmedida');
	}		

	public function categoriaproducto(){
		return $this->belongsTo('App\Categoriaproducto','IdCategoria');
	}		

	public function subcategoriaproducto(){
		return $this->belongsTo('App\Subcategoriaproducto','IdSubcategoria');
	}

	public function receta(){
		return $this->hasOne('App\Receta','IdProducto');
	}

	public function detreceta(){
		return $this->hasOne('App\DetalleReceta','IdProducto');
	} */
}
