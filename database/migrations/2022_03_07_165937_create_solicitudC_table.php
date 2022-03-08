<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesolicitudCTable extends Migration
{
    
    public function up()
    {
        Schema::create('solicitudC', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nombre_colaborador')->nullable()->unsigned();
            $table->foreign('nombre_colaborador')->references('id')->on('users');
            $table->unsignedBigInteger('tipo_sol')->nullable()->unsigned();
            $table->foreign('tipo_sol')->references('id')->on('tipo_solicitud');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->text('Descripcion');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('solicitudC');
    }
}
