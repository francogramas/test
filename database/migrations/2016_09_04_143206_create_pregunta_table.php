<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('pregunta')->unique();     
            $table->integer('subcategoria_id')->unsigned()->index();

            $table->foreign('subcategoria_id')->references('id')->on('subcategoria');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pregunta');               
    }
}
