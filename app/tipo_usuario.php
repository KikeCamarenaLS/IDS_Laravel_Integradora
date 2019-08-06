<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\usuario;

class tipo_usuario extends Model
{
	protected $table ='tipo_usuario';
	protected $fillable=['id','tipo'];
	public static $tipo_usuario;

	public function usuarios (){
		return $this->hasMany(usuario::class);
	}
}
