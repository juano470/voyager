<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros', function (Blueprint $table){

            $table->bigIncrements('id');
        //$table->bigIncrements('cen_reg');    
            $table->unsignedBigInteger('cen_subdirector');    
            $table->string('cen_nombre', 50);    
            $table->string('cen_direccion', 50);    
            $table->string('cen_telefono', 50);    
            $table->string('cen_extension', 25);
            $table->string('cen_fax', 25);    
            $table->text('cen_plan_estrategico');
            $table->string('cen_regional', 50);
            $table->foreign('cen_subdirector')->references('id')->on('cargos');            $table->timestamps();



        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('centros');
        //
    }
}
