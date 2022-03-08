<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\hrflex;
use SoftDeletes;
use App\Models\User;

class HrFlexController extends Controller
{
    public function altahrflex() //ordena los valores de la base de datos y le añade + 1 a los campos para que se agreguen
    {
        $consulta = hrflex::orderBy('id_horariof', 'ASC')
                            ->get();
        $cuantos = count($consulta);
        if($cuantos==0)
        {
            $idsigue = 1;
        }
        else{
            $idsigue = $consulta[0]->id_horariof + 1;
        }
        return view('admin.hrflex')
                ->with('idsigue', $idsigue);        
    }


    public function guardarhrflex(Request $request){

         
        $nombre_horario = $request->nombre_horario;
        $d1 = $request-> d1;
        $d2 = $request-> d2;
        $d3 = $request-> d3;
        $d4 = $request-> d4;
        $d5 = $request-> d5;
        $diass = $request->diass;
        $rango_horas = $request->rango_horas;
        $useridf = $request->useridf;
     
       
        $horarioflex = new hrflex;
        $horarioflex->nombre_horario = $request ->nombre_horario;
        $horarioflex->rango_horas = $request ->rango_horas;
        $horarioflex-> d1 = $request-> d1;
        $horarioflex-> d2 = $request-> d2;
        $horarioflex-> d3 = $request-> d3;
        $horarioflex-> d4 = $request-> d4;
        $horarioflex-> d5 = $request-> d5;
        $horarioflex->useridf = $request->useridf;




        $horarioflex->save();
        Session::flash('mensaje', 'El horario: ha sido agredado correctamente.');
        return redirect()->route('hrflex');
        
     
       
       
   }
   public function reportehrflex(){

     $ab = DB::table('hrflexes')
     ->select('hrflexes.id_horariof','hrflexes.nombre_horario',
     'hrflexes.d1' , 'hrflexes.d2' , 'hrflexes.d3' ,
     'hrflexes.d4' , 'hrflexes.d5' , 'hrflexes.rango_horas', 
     'users.name', 'hrflexes.useridf',  'hrflexes.deleted_at')
     ->join('users','users.id', '=', 'hrflexes.useridf')
     ->get();  

     $ds = DB::table('users')
     ->select('users.name', 'users.id')
     ->get();    


     return view ('admin.hrflex')
     ->with('ab',$ab)
     ->with('ds',$ds);
   }

   public function activarhrflex($id_horariof){ //ACTIVAR
    $hrflex = hrflex::withTrashed()->where('id_horariof',$id_horariof)->restore();
    Session::flash('mensaje','El horario ha sido reactivado correctamente.');
    return redirect()->route('hrflex');

}
   public function desactivarhrflex($id_horariof){ //DESACTIVAR
    $hrflex = hrflex::find($id_horariof);
    $hrflex->delete();
    Session::flash('mensaje','El horario ha sido desactivado correctamente.');
    return redirect()->route('hrflex');

    }

    public function eliminarhrflex($id_horariof){  //ELIMINACION
        $hrflex = hrflex::withTrashed()
        ->where('id_horariof',$id_horariof)          
        ->forceDelete();
        Session::flash('mensaje','El horario ha sido eliminado correctamente.');
        return redirect()->route('hrflex');

}

public function modificarhrflex($id_horariof){ //modificacion 
        

    $consulta = DB::table('hrflexes')
    ->select('hrflexes.id_horariof','hrflexes.nombre_horario',
    'hrflexes.d1' , 'hrflexes.d2' , 'hrflexes.d3' ,
    'hrflexes.d4' , 'hrflexes.d5' , 'hrflexes.rango_horas', 
    'users.name', 'hrflexes.useridf',  'hrflexes.deleted_at')
    ->join('users','users.id', '=', 'hrflexes.useridf')
    ->where('id_horariof', $id_horariof)
    ->get();
                
    $ds = DB::table('users')
    ->select('users.name', 'users.id')
    ->get();

     $users = User::all();
        return view('admin.hrmflex')
        ->with('consulta', $consulta[0])
                ->with('users',$users)
                
                ->with('ds',$ds);
}

public function guardarcambiohrflex(Request $request){ //guardar modificacion (en progreso )

$horarioflex = hrflex::where($request->id_horariof)->first();
//$horarioflex = hrflex::find($request->$id_horariof)->first();
$horarioflex->nombre_horario = $request ->nombre_horario;
$horarioflex->rango_horas = $request ->rango_horas;
$horarioflex-> d1 = $request-> d1;
$horarioflex-> d2 = $request-> d2;
$horarioflex-> d3 = $request-> d3;
$horarioflex-> d4 = $request-> d4;
$horarioflex-> d5 = $request-> d5;
$horarioflex->useridf = $request->useridf;
$horarioflex->save();  
Session::flash('mensaje', 'El horario: ha sido modificado correctamente.');

return redirect()->route('hrflex');
}
}
