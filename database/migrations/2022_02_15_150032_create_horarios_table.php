<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
   
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->bigIncrements('id_horario');
            $table->string('nombre_horario',30);
            $table->time('hora_entrada');
            $table->time('hora_salida');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
