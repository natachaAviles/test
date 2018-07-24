<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEstadosPerritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('estado_perritos',function(Blueprint $table){
            $table->integer('id');
            $table->string('nombre');
            $table->timestamps();
        });
        DB::table('estado_perritos')->insert([
                ['id' => '1','nombre' => 'no adoptado'],
                ['id' => '2','nombre' => 'adoptado'],
                ['id' => '3','nombre' => 'fallecido']
        ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:dropIfExists('estado_perritos');
    }
}
