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
    public function run(){
        // Buscar objeto rol con el titulo de Administrador
        $rol_administrador = Rol::where("titulo", "Administrador")->first();
        // Buscar objeto rol con el titulo Usuario
        $rol_usuario = Rol::where("titulo", "Usuario")->first();

        // Crear usuario
        $admin = new User();
        $admin->name = "Administrador 1";
        $admin->email = "admin@example.cl";
        $admin->fenaci = "1995-06-02";
        $admin->password = bcrypt("password");
        $admin->rol_id = $rol_administrador->id; // Asignar rol usando el objeto rol administrador
        $admin->activo = 1;
        $admin->save();

        $usuario = new User();
        $usuario->name = "Usuario 1";
        $usuario->email = "usuario@example.cl";
        $usuario->fenaci = "1995-06-02";
        $usuario->password = bcrypt("password");
        $usuario->rol_id = $rol_usuario->id; // Asignar rol usando el objeto rol usuario
        $usuario->activo = 1;
        $usuario->save();
    }
}
