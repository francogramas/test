<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntaimagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('preguntaimagen', function(Blueprint $table)
        {            
            $table->integer('pregunta_id')->unsigned()->index();            
            $table->string('imagen_id');                    

            $table->timestamps();
            $table->foreign('preguta_id')->references('id')->on('pregunta');            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('preguntaimagen');        
    }
}
