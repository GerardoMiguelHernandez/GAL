<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{


protected $table="album";
protected $fillable =['nombre','descripcion','imagen','evento_id'];

public function imagenes(){
return $this->hasMany('App\Imagen');
}

public function evento(){
return $this->hasOne('App\Evento','id','evento_id');
}
}
