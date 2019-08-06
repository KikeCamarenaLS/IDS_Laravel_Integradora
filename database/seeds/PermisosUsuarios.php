<?php

use Illuminate\Database\Seeder;

class PermisosUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = ['UsuariosSistema','GestionarClientes' , 'VerTienda' , 'GestionarTienda' , 'GestionarAvances', 'ConsultarAvances', 'ModificarPersonal', 'VerPersonal', 'GestionarDietas', 'ConsultarDieta', 'ConsultarRutina', 'GestionarRutinas', 'RegistroPersonal', 'GestionarPaquetes', 'VerPaquetes', 'Comprar', 'Invitado'];

    	for ($i=0; $i < count($permisos); $i++) {
    		DB::table('permissions')->insert([
    			'name' => $permisos[$i],
    			'guard_name' => 'web'
    		]);
    	}
    }
}
