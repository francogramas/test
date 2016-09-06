<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->integer('estado_id')->unsigned()->index();            
            $table->integer('user_id')->unsigned()->index();

            $table->foreign('estado_id')->references('id')->on('evaluacionestado');
            $table->foreign('user_id')->references('id')->on('users');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('evaluacion');
    }
}
