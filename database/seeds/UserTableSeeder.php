<?php

use Illuminate\Database\Seeder;
use RepoPublico\User;
use RepoPublico\Rol;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_administrador = Rol::where("titulo", "Administrador")->first();
        $rol_usuario = Rol::where("titulo", "Usuario")->first();

        $admin = new User();
        $admin->name = "Administrador 1";
        $admin->email = "admin@example.cl";
        $admin->fenaci = "1995-06-02";
        $admin->password = bcrypt("password");
        $admin->rol_id = $rol_administrador->id;
        $admin->activo = 1;
        $admin->save();

        $usuario = new User();
        $usuario->name = "Usuario 1";
        $usuario->email = "usuario@example.cl";
        $usuario->fenaci = "1995-06-02";
        $usuario->password = bcrypt("password");
        $usuario->rol_id = $rol_usuario->id;
        $usuario->activo = 1;
        $usuario->save();

    }
}
