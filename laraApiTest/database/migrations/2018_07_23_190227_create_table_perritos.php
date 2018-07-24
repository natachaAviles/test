<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perritos',function(Blueprint $table){
            $table->increments('id');
            $table->string('raza');
            $table->string('color');
            $table->date('fecha_nacimiento_aprox');
            $table->string('nombre_temporal');
            $table->integer('id_estado')->default(1);
            $table->integer('id_sucursal');
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
        Schema:dropIfExists('perritos');
    }
}
