<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\ValidadorFormulario;

class ControladorVistas extends Controller
{
    public function procesarllenado(ValidadorFormulario $req){
        
        return redirect('formulario')->with('Confirmacion','Datos enviados correctamente');
    }
    public function showfor(){
        return view('formulario');
    }
    public function showtab(){
        return view('tabla');
    }
}
