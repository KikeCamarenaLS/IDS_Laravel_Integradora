<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PaqueteController extends Controller
{
     public function vistaRegistrarPaquete()
    {
    	return view('Paquetes.NuevoPaquete');
    }
    public function RegistrarPaquete($nombre,$descripcion,$costo){
    	DB::update("insert into paquete value(null,'".$nombre."','".$descripcion."',".$costo.")");
    	return "success";
    }
    public function ListadoPaquetes(){
    	return view('Paquetes.ListadoPaquetes');
    }
    public function mostrarTablaPersona(){
    	$paquete=DB::select("select * from paquete");
    	return $paquete;

    }
    public function eliminarTablaPaquetes($id){
    	$eliminar=DB::update("delete from paquete where id_paquete=".$id);
    	return $eliminar;
    }
    public function modificarpaquete($id,$nombre,$descripcion,$costo){
	$eliminar=DB::update("update paquete set Paquete='".$nombre."',descripcion='".$descripcion."',Costo='".$costo."' where id_paquete=".$id);
    	return $eliminar;
    }
    public function ListadoPaquetesUsuario(){
    	return view('Paquetes.ConsultaPaquetes');
    }
}
