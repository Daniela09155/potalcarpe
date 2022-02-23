<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\horario;
use App\Models\diasfs;


class HorariofController extends Controller
{
    public function altahorariof() //ordena los valores de la base de datos y le añade + 1 a los campos para que se agreguen
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
        return view('admin.horariosf')
                ->with('idsigue', $idsigue);        
    }


    public function guardarhorariof(Request $request){

       $nombre_horariof = $request->nombre_horariof;
       $nombre_diaf = $request->nombre_diaf;
       $hora_entradaf = $request->hora_entradaf;
       $hora_salidaf = $request->hora_salidaf;
       $diass = $request->diass;

       for($i=0;  $i<$diass; $i++) {
           $datasave = [
               'nombre_horariof' => $nombre_horariof[0],
               'nombre_diaf' => $nombre_diaf[$i],
               'hora_entradaf' => $hora_entradaf[$i],
               'hora_salidaf' => $hora_salidaf[$i]
           ];
           DB::table('diasfs')->insert($datasave);
       }
    
       return redirect()->route('horariosf');
   }
   public function reportehorariof(){
    $ab =\DB::select("SELECT hf.id_horariof,nombre_diaf, hf.nombre_horariof, hf.hora_entradaf, hf.hora_salidaf
    FROM diasfs AS hf");
     return view("admin.horariosf")
     ->with('ab',$ab);

   }
   
}
