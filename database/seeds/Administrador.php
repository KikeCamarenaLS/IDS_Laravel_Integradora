<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Administrador extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $user = User::create([

        	'name' => 'Administrador',
        	'email' => 'ultragym.oficial@gmail.com',
        	'password' => '$2y$10$aGZzeAJZ/KyzCd6z2EpfGuZ.ltRsWL7hhSDomUSvebPs.fsPFuIuK',
        	'apellido_P' => 'IDS',
        	'apellido_M' => 'UltraGym',
        	'fecha_nacimiento' => '01/08/2018',
        	'direccion' => 'Tecmac',
        	'telefono' => '5529104257',
        	'id_tipo_usuario' => 1

        ]);




        //$role = Role::create(['name' => 'Administrador']);
        $role =Role::find(1);
		$user->assignRole('Administrador');

 		$permisos = ['UsuariosSistema','GestionarClientes' , 'VerTienda' , 'GestionarTienda' , 'GestionarAvances', 'ConsultarAvances', 'ModificarPersonal', 'VerPersonal', 'GestionarDietas', 'ConsultarDieta', 'ConsultarRutina', 'GestionarRutinas', 'RegistroPersonal', 'GestionarPaquetes', 'VerPaquetes', 'Comprar', 'GestionarSalud', 'ConsultarAvanceSalud'];

 		for ($i=0; $i < count($permisos); $i++) {
 			$role->givePermissionTo($permisos[$i]);
 		}



    }
}
