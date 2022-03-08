<?php

namespace Database\Seeders;
use App\Models\tipo_solicitud;
use Illuminate\Database\Seeder;

class TipoSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipo_solicitud::create([
            'id' => '1',
            'Nombre' => 'Enfermedad',
        ]);
        tipo_solicitud::create([
            'id' => '2',
            'Nombre' => 'Motivo personal',
        ]);
        tipo_solicitud::create([
            'id' => '3',
            'Nombre' => 'Motivo Escolar',
        ]);
    }
}
