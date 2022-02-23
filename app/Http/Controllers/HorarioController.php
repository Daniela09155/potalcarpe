<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\diasfs;
use App\Models\horario;
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
        return view('admin.horarios')
                ->with('idsigue', $idsigue);        
    }

    public function guardarhorario(Request $request){

            
        $nombre_horario = $request->nombre_horario;
        $hora_entrada = $request->hora_entrada;
        $hora_salida = $request->hora_salida;
        $fecha_inicio = $request->fecha_inicio;
        $fecha_final = $request->fecha_final;
     
        $horario = new horario;
        $horario->nombre_horario = $request ->nombre_horario;
        $horario->hora_entrada = $request -> hora_entrada;
        $horario->hora_salida = $request -> hora_salida;
        $horario->fecha_inicio = $request -> fecha_inicio;
        $horario->fecha_final = $request -> fecha_final;
        $horario->save();
 
        Session::flash('mensaje', 'El horario: '. $request->nombre_horario. ' ha sido agredado correctamente.');
        return redirect()->route('horarios');
    }

    public function reportehorario()
   {
      $ar =\DB::select("SELECT hr.id_horario, hr.nombre_horario, hr.hora_entrada, hr.hora_salida, hr.fecha_inicio, 
      hr.fecha_final, hr.deleted_at
      FROM horarios AS hr");
       return view ('admin.horarios')
       ->with('ar',$ar);
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
        $ar =\DB::select("SELECT hr.id_horario, hr.nombre_horario, hr.hora_entrada, hr.hora_salida, hr.fecha_inicio, 
        hr.fecha_final, hr.deleted_at
        FROM horarios AS hr
        where hr.id_horario = hr.id_horario");
         return view ('admin.horarios')
                ->with('ar', $ar[0])
                ->with('ar',$ar);
               
}
   
public function guardarcambioh(Request $request){ //guardar modificacion (en progreso )

    $horario = horario::find($request->id_horario);
    $horario->nombre_horario = $request ->nombre_horario;
    $horario->hora_entrada = $request -> hora_entrada;
    $horario->hora_salida = $request -> hora_salida;
    $horario->fecha_inicio = $request -> fecha_inicio;
    $horario->fecha_final = $request -> fecha_final;
    $horario->save();

    Session::flash('mensaje', 'El horario: '. $request->nombre_horario. ' ha sido modificado correctamente.');
        return redirect()->route('horarios');
}

}
