<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEstadosSucursales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_sucursales',function(Blueprint $table){
            $table->integer('id');
            $table->string('nombre');
            $table->timestamps();
        });
        DB::table('estado_sucursales')->insert([
                ['id' => '1','nombre' => 'operando'],
                ['id' => '2','nombre' => 'reparacion'],
                ['id' => '3','nombre' => 'cerrado']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:dropIfExists('estado_sucursales');
    }
}
