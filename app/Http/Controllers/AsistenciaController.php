<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess', 'asistencia.index');
        date_default_timezone_set('America/Mexico_City');
        
        $hora_actual = date("H:i:s", time());
        $fecha_actual = date("Y").'-'.date("m").'-'.date("d");
        $arrayDias = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
        $d = $arrayDias[date("j")];
        $iduser = auth()->id();

        $ar =\DB::select("SELECT date(fecha_hora) as fecha,time(fecha_hora) as hora,tipo_registro 
        from historial_marcaciones 
        where user_id=" . $iduser ." and date(fecha_hora)='" . $fecha_actual . "'");

        $ultihora=\DB::select("SELECT MAX(time(m.fecha_hora)) as hor FROM historial_marcaciones m 
        WHERE date(m.fecha_hora) = '" . $fecha_actual . "' and m.user_id=" . $iduser ." ");
        foreach($ultihora as $ul){
            $r=$ul->hor;
        }

        $aractual =\DB::select("SELECT date(fecha_hora) as fecha, time(fecha_hora) as hora, tipo_registro as tipo
        from historial_marcaciones 
        where user_id=" . $iduser ." and date(fecha_hora)='" . $fecha_actual . "' and time(fecha_hora)='" . $r. "'");
        
       return view ('user.asistenciauser',compact('ar','aractual'))->with('d', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEntrada()
    {
        Gate::authorize('haveaccess', 'asistencia.index');
        
        $iduser = auth()->id();
        date_default_timezone_set('America/Mexico_City');
        
        $fechamarc =date('Y-m-d H:i:s', time());
        $t = "Entrada";
        DB::insert("INSERT INTO historial_marcaciones (user_id, fecha_hora, tipo_registro) 
        VALUES (" . $iduser .",'".$fechamarc."','".$t."')");
       Session::flash('mensaje', 'Su '. $t. ' ha sido agredad@ correctamente.');
       return redirect()->route('asistencia');
    }
    public function createSalida()
    {
        Gate::authorize('haveaccess', 'asistencia.index');
        
        $iduser = auth()->id();
        date_default_timezone_set('America/Mexico_City');
        
        $fechamarc =date('Y-m-d H:i:s', time());
        $t = "Salida";
        DB::insert("INSERT INTO historial_marcaciones (user_id, fecha_hora, tipo_registro) 
        VALUES (" . $iduser .",'".$fechamarc."','".$t."')");
       Session::flash('mensaje', 'Su '. $t. ' ha sido agredad@ correctamente.');
       return redirect()->route('asistencia');
    }
    public function createDescanso()
    {
        Gate::authorize('haveaccess', 'asistencia.index');
        
        $iduser = auth()->id();
        date_default_timezone_set('America/Mexico_City');
        
        $fechamarc =date('Y-m-d H:i:s', time());
        $t = "Descanso";
        DB::insert("INSERT INTO historial_marcaciones (user_id, fecha_hora, tipo_registro) 
        VALUES (" . $iduser .",'".$fechamarc."','".$t."')");
       Session::flash('mensaje', 'Su '. $t. ' ha sido agredad@ correctamente.');
       return redirect()->route('asistencia');
    }
    public function createRegreso()
    {
        Gate::authorize('haveaccess', 'asistencia.index');
        
        $iduser = auth()->id();
        date_default_timezone_set('America/Mexico_City');
        
        $fechamarc =date('Y-m-d H:i:s', time());
        $t = "Regreso";
        DB::insert("INSERT INTO historial_marcaciones (user_id, fecha_hora, tipo_registro) 
        VALUES (" . $iduser .",'".$fechamarc."','".$t."')");
       Session::flash('mensaje', 'Su '. $t. ' ha sido agredad@ correctamente.');
       return redirect()->route('asistencia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {

 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

    }
}
