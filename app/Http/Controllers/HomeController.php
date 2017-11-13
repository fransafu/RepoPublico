<?php

namespace RepoPublico\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create una nueva instancia del controlador
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Muestra el inicio del portal
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        // Utilizamos el middleware para filtrar la peticion y saber
        // si el usuario tiene autorizacion para avanzar
        $request->user()->authorizeRoles(['Administrador', 'Usuario']);
        return view('home');
    }
}
