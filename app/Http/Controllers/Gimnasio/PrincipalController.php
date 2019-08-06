<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Requests\UsuarioRequest;
use Laracasts\Flash\Flash;
use PDF;
use App\usuario;
use App\tipo_usuario;
use App\variables;



class PrincipalController extends Controller
{

	public function indexView()
	{

		return view('principal');
	}

	public function ConsultaPersonalPDF()
	{
		$titulo="Estudiantes";
		$descripcion="estamos perdidas estamos perdidas estamos perdidas estamos perdidas estamos perdidas estamos perdidas estamos perdidas estamos perdidas estamos perdidas estamos perdidas";
		$codigo="123456789";
		$precio="467.50";
		$pdf = PDF::loadView('PDF.CuponesPaquetes', compact('titulo','descripcion','codigo','precio'));
		return $pdf->download('Cuponera de regalo.pdf');
	}

	   public function __construct()
    {
        $this->middleware('guest')->except(['logout','principal']);
    }






    public function Login(Request  $request){

       $Correo= Request::input('Correo');
      $Contraseña=Request::input('Contraseña');
      $CaracterContra=strlen($Contraseña);
      if($Correo==''||$Correo==null||$Contraseña==''||$Contraseña==null){
        $Mensaje='Llena los campos Correo/Contraseña';
        return redirect()->route('indexRoute',compact('Mensaje'));
      }else{
        if($CaracterContra<8){
          $Mensaje='La contraseña debe de tener mas de 8 caracteres';
          return redirect()->route('indexRoute',compact('Mensaje'));
        }else{
          // $Consulta=usuario::
          $ConsultasA = usuario::select('*')->where('correo', '=', $Correo )->where('password', '=', $Contraseña )->first();
          if($ConsultasA){
            $nombres=$ConsultasA-> nombre;
            $Apellidos=$ConsultasA-> apellidos;
            $Mensaje=$nombres.' '.$Apellidos;
            return redirect()->route('usuarioPrincipal',compact('Mensaje'));
          }else{
            $Mensaje='Usuario/Contraseña incorrectos';
            return redirect()->route('indexRoute',compact('Mensaje'));
          }



        }
      }
    }

    public function store(UsuarioRequest $request)
    {
      $m=$request->input('mail');

      $results = DB::select('select email from users where email = :correoN', ['correoN' => $m]);




      if($results)
        {
          //flash('Correo Repetido')->error();

          return redirect()->route('indexRoute');
        }


        else{

      $email=$request->input('mail');
      $pass=$request->input('pass');
      $nombre=$request->input('nombre');
      $apellido_p=$request->input('apellido_p');
      $apellido_m=$request->input('apellido_m');
      $fechaN=$request->input('fNacimiento');
      $direccion=$request->input('direccion');
      $telefono=$request->input('telefono');
      variables::$tipo_usuario="1";
      //dd($pass,$email, $nombre,$apellido_p,$apellido_m,$fechaN,$direccion,$telefono,variables::$tipo_usuario);
      RegisterController::logeado($pass,$email, $nombre,$apellido_p,$apellido_m,$fechaN,$direccion,$telefono,variables::$tipo_usuario);

         //flash('Registrado con exito')->success();
          return redirect()->route('indexRoute');

        }


    }

}
