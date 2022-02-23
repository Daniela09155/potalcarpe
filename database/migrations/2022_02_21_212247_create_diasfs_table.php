<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiasfsTable extends Migration
{
    
    public function up()
    {
        Schema::create('diasfs', function (Blueprint $table) {
            $table->increments('id_horariof');
            $table->string('nombre_diaf');
            $table->string('nombre_horariof');
            $table->time('hora_entradaf');
            $table->time('hora_salidaf');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('diasfs');
    }
}
