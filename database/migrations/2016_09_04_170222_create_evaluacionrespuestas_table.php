<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionrespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacionrespuestas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->integer('evaluacion_id')->unsigned()->index();            
            $table->integer('respuesta_id')->unsigned()->index();

            $table->foreign('evaluacion_id')->references('id')->on('evaluacion');
            $table->foreign('respuesta_id')->references('id')->on('respuestas');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('evaluacionrespuestas');
    }
}
