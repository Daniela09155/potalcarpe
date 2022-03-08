<?php

namespace App\Http\Controllers;

use SoftDeletes;
use App\Models\solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SolicitudController extends Controller
{
    public function altasolicitud() { 
        $consu = solicitud::orderBy('id', 'ASC')
                            ->get();
        $cont = count($consu);
        if($cont==0)
        {
            $idsig = 1;
        }
        else{
            $idsig = $consu[0]->id + 1;
        }
        $users = User::all();
        return view('admin.solicitudcrear')
                ->with('idsig', $idsig)
                ->with('users', $users);    

                  
    }

    public function savesolicitud(Request $request){

        $so = DB::table('users')
        ->select('users.name', 'users.id')
        ->get();    
       
        $nombre_colaborador = $request->nombre_colaborador;
        $tipo_sol = $request->tipo_sol;
        $fecha_inicio = $request->fecha_inicio;
        $fecha_final = $request->fecha_final;
        $Descripcion = $request->Descripcion;
     
        $solicitud = new solicitud;
        $solicitud->nombre_colaborador = $request ->nombre_colaborador;
        $solicitud->tipo_sol = $request -> tipo_sol;
        $solicitud->fecha_inicio = $request -> fecha_inicio;
        $solicitud->fecha_final = $request -> fecha_final;
        $solicitud->Descripcion = $request->Descripcion;
        $solicitud->save();
 
        Session::flash('mensaje', 'La solicitud del colaborador: '. $request->nombre_colaborador. ' ha sido creada correctamente.');
        return redirect()->route('reportesolicitud');
    }

    public function reportesolicitud1()
   {
      $sol =\DB::select("SELECT sl. id , sl.nombre_colaborador, sl.tipo_sol, sl.fecha_inicio, sl.fecha_final, sl.Descripcion
      FROM solicitudc AS sl");

        $so = DB::table('users')
        ->select('users.name', 'users.id')
        ->get();   
        
        $tp = DB::table('tipo_solicitud')
        ->select('tipo_solicitud.Nombre', 'tipo_solicitud.id')
        ->get();   

       return view ('admin.solicitudcrear')
       ->with('sol',$sol)
       ->with('tp',$tp)
       ->with('so',$so);
   }    
   
   public function reportesolicitud2()
   {
      $sol =\DB::select("SELECT sl. id , sl.nombre_colaborador, sl.tipo_sol, sl.fecha_inicio, sl.fecha_final, sl.Descripcion
      FROM solicitudc AS sl");

        $so = DB::table('users')
        ->select('users.name', 'users.id')
        ->get();   
        
        $tp = DB::table('tipo_solicitud')
        ->select('tipo_solicitud.Nombre', 'tipo_solicitud.id')
        ->get();   

       return view ('admin.reportesolicitud')
       ->with('sol',$sol)
       ->with('tp',$tp)
       ->with('so',$so);
   }    

}
