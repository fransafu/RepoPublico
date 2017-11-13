<?php

use Illuminate\Database\Seeder;
use RepoPublico\Rol;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_admin = new Rol();
        $rol_admin->titulo = "Administrador";
        $rol_admin->descripcion = "Administrador del portal";
        $rol_admin->activo = 1;
        $rol_admin->save();

        $rol_usuario = new Rol();
        $rol_usuario->titulo = "Usuario";
        $rol_usuario->descripcion = "Usuario del portal";
        $rol_usuario->activo = 1;
        $rol_usuario->save();
    }
}
