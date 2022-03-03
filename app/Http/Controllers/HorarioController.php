<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\horario;
use App\Models\User;
use SoftDeletes;

class HorarioController extends Controller
{
    public function altahorario() //ordena los valores de la base de datos y le añade + 1 a los campos para que se agreguen
    {
        $consulta = horario::orderBy('id_horario', 'ASC')
                            ->get();
        $cuantos = count($consulta);
        if($cuantos==0)
        {
            $idsigue = 1;
        }
        else{
            $idsigue = $consulta[0]->id_horario + 1;
        }
        $users = User::all();
        return view('admin.horarios')
                ->with('idsigue', $idsigue)
                ->with('users', $users);        
    }

    public function guardarhorario(Request $request){

       
        $nombre_horario = $request->nombre_horario;
        $hora_entrada = $request->hora_entrada;
        $hora_salida = $request->hora_salida;
        $fecha_inicio = $request->fecha_inicio;
        $fecha_final = $request->fecha_final;
        $userid = $request->userid;
     
        $horario = new horario;
        $horario->nombre_horario = $request ->nombre_horario;
        $horario->hora_entrada = $request -> hora_entrada;
        $horario->hora_salida = $request -> hora_salida;
        $horario->fecha_inicio = $request -> fecha_inicio;
        $horario->fecha_final = $request -> fecha_final;
        $horario->userid = $request->userid;
        $horario->save();
 
        Session::flash('mensaje', 'El horario: '. $request->nombre_horario. ' ha sido agredado correctamente.');
        return redirect()->route('horarios');
    }

    public function reportehorario()
   {
      $ar =\DB::select("SELECT hr.id_horario, hr.nombre_horario, hr.hora_entrada, hr.hora_salida, hr.fecha_inicio, 
      hr.fecha_final, hr.deleted_at, hr.userid, us.name
      FROM horarios AS hr
      INNER JOIN users AS us ON us.id = hr.userid");

        $ab = DB::table('users')
        ->select('users.name', 'users.id')
        ->get();    

       return view ('admin.horarios')
       ->with('ar',$ar)
       ->with('ab',$ab);
   }    

   public function activarhorario($id_horario){ //ACTIVAR
    $horario = horario::withTrashed()->where('id_horario',$id_horario)->restore();
    Session::flash('mensaje','El horario ha sido reactivado correctamente.');
    return redirect()->route('horarios');

}
   public function desactivarhorario($id_horario){ //DESACTIVAR
    $horario = horario::find($id_horario);
    $horario->delete();
    Session::flash('mensaje','El horario ha sido desactivado correctamente.');
    return redirect()->route('horarios');

    }

    public function eliminarhorario($id_horario){  //ELIMINACION
        $horario = horario::withTrashed()
        ->where('id_horario',$id_horario)          
        ->forceDelete();
        Session::flash('mensaje','El horario ha sido eliminado correctamente.');
        return redirect()->route('horarios');

}
    public function modificarh($id_horario){ //modificacion (en progreso )
        

                $consulta = DB::table('horarios')
                ->select('horarios.id_horario', 'horarios.nombre_horario', 
                'horarios.hora_entrada', 'horarios.hora_salida',
                'horarios.userid','horarios.fecha_inicio',
                'horarios.fecha_final','horarios.deleted_at','users.name')
                ->join('users','users.id', '=', 'horarios.userid')
                ->where('id_horario', $id_horario)
                ->get();
                            
          $ac = DB::table('users')
                            ->select('users.name', 'users.id')
                            ->get(); 

                            $users = User::all();
                    return view('admin.horariosm')
                            ->with('consulta', $consulta[0])
                            ->with('users',$users)
                            ->with('ac',$ac);
}
   
public function guardarcambioh(Request $request){ //guardar modificacion (en progreso )

    $horario = horario::where($request->id_horario)->first();
    $horario->nombre_horario = $request ->nombre_horario;
    $horario->hora_entrada = $request->hora_entrada;
    $horario->hora_salida  = $request->hora_salida;
    $horario->fecha_inicio  = $request->fecha_inicio;
    $horario->fecha_final =  $request->fecha_final;
    $horario->userid =  $request->userid; 
    $horario->save();  
    Session::flash('mensaje', 'El horario: ha sido modificado correctamente.');
    
    return redirect()->route('horarios');
}

}
