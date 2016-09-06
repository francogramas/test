<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('razonsocial');
            $table->string('nit');
            $table->integer('ciudad')->unsigned()->index();            
            $table->string('direccion');
            $table->string('telefono');            
            $table->string('correo');
            $table->integer('user_id')->unsigned()->index();


            $table->timestamps();
            $table->foreign('ciudad')->references('id')->on('ciudades');
            $table->foreign('user_id')>references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('empresa');
    }
}
