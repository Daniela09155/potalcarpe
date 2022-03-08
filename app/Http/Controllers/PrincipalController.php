<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        return view('index');
    }

    public function horario(){
        return view('admin.horario');
    }

    public function horariosf(){
        return view('admin.horariosf');
    }

    public function empleados(){
        return view ('admin.empleados');
    }

    public function solicitud(){
        return view ('admin.solicitud');
    }

    public function informes(){
        return view ('admin.informes');
    }

    public function calendario(){
        return view ('admin.calendario');
    }
    public function hrflex(){
        return view ('admin.hrflex');
    }
    public function loguear(){
        return view ('auth.login');
    }
    public function asistencia(){
        return view ('user.asistenciauser');
    }
    public function solicitudes(){
        return view ('user.bandejasolicitudes');
    }
    public function estadisticas(){
        return view ('user.estadisticasuser');
    }
}
