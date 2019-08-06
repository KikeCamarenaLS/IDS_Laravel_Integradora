<?php

use Illuminate\Database\Seeder;

class RolesUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $roles = [ 'Administrador' , 'Cliente' , 'Nutriologo', 'Instructor', 'Invitado' ];

       // $roles = [  'Cliente' , 'Nutriologo', 'Instructor' ];


        for($i = 0; $i< count($roles); $i++){
        	DB::table('roles')->insert([
    			'name' => $roles[$i],
    			'guard_name' => 'web'
    		]);
        }
    }
}
