<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

	public function principal(){

		$usuarios=Auth()->user()->name;
		$id_usuario=Auth()->user()->id;
		$usuario=User::find($id_usuario);

		$tipo=$usuario->tipo;
    return view('home', compact('tipo'));
      //return view('nutriologo.HomeNutri');

			// return view('home');

    }
}
