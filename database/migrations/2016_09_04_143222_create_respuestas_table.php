<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('respuesta');
            $table->integer('puntaje')->unsigned(); 
            $table->integer('pregunta_id')->unsigned()->index();

            $table->foreign('pregunta_id')->references('id')->on('pregunta');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('respuestas');
    }
}
