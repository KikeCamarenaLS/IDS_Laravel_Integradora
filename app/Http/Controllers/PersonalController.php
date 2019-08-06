<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class PersonalController extends Controller
{
      public function vistaRegistrarPersonal()
    {
    	return view('Personal.NuevaPersona');
    }
    public function RegistrarPersonal($nombre,$ap,$am,$direccion,$correo,$tel,$contra,$t_us){
    	$contras=Hash::make($contra);


    	DB::update("insert into persona value(null,'".$nombre."','".$ap."','".$am."','".$direccion."','".$correo."',".$tel.",'".$contras."','".$t_us."')");
    	return "success";
    }
}
