<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index(){

        return view('Administrador_LauNET.index');
    }

    public function perfil(){

        return view('/Administrador_LauNET/Personal/Administrador/perfil');
    }
}
