<?php



namespace RepoPublico\Http\Controllers;

use Illuminate\Http\Request;

use RepoPublico\User;

class UserController extends Controller
{
    public function index(){
    	$users = User::all();

    	return view('Usuarios/index')->with('users', $users);
    }

    public function create(){
    	// Retornar el formulario de creacion de usuarios
    	// Ruta: app/view/users/create.blade.php
    	return View::make('users.create');
    }

    public function store(){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update($id){

    }

    public function destroy($id){

    }
}
