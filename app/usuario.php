<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tipo_usuario;

class usuario extends Model
{
    protected $table ='usuarios';
    protected $fillable=['correo','password','nombre', 'apellido_p', 'apellido_m','fecha_nacimiento','direccion','telefono','id_tipo_usuario'];
    public static $tipo_usuario;

    public function tipo(){
      return $this->belongsTo(tipo_usuario::class,'id');
    }
}
