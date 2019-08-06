<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PermisosUsuarios::class);
        $this->call(RolesUsuarios::class);
        //$this->call(PermisosSeed::class);
        $this->call(Administrador::class);

    }
}
