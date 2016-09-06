<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('subcategoria', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre',45)->unique();     
            $table->integer('categoria_id')->unsigned()->index();

            $table->foreign('categoria_id')->references('id')->on('categoria');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subcategoria');        
    }
}
