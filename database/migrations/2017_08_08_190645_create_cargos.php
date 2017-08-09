<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table){

        $table->bigIncrements('id');
        $table->string('car_nombre', 50);    
        $table->string('car_apellido', 50);    
        $table->string('car_correo', 50);    
        $table->string('car_profesion', 50);    
        $table->string('car_tipo', 50);    
        $table->text('car_foto');    
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
        Schema::drop('cargos');
            }
}
