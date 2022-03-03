<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrflexesTable extends Migration
{
  
    public function up()
    {
        Schema::create('hrflexes', function (Blueprint $table) {
            $table->increments('id_horariof');
            $table->string('nombre_horario');
            $table->string('d1')->nullable();
            $table->string('d2')->nullable();
            $table->string('d3')->nullable();
            $table->string('d4')->nullable();
            $table->string('d5')->nullable();
            $table->string('rango_horas');
            $table->unsignedBigInteger('useridf')->nullable()->unsigned();
            $table->foreign('useridf')->references('id')->on('users');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hrflexes');
    }
}
