<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('programas', function (Blueprint $table){

        $table->bigIncrements('id');
        //$table->bigIncrements('cen_reg');    
        $table->unsignedBigInteger('pro_centro');    
        $table->string('pro_nombre', 50);    
        $table->string('pro_especialidad', 50);    
        $table->integer('pro_codigo');    
        $table->string('pro_tipo', 25);
        $table->string('pro_modalidad', 25);    
        $table->string('pro_jornada');
        $table->string('pro_ciudad', 50);
        $table->string('pro_descripcion');
        $table->integer('pro_version');
        $table->boolean('pro_tiene_registro');
        $table->string('pro_registro_calificado', 50);
        $table->date('pro_fecha_registro');
        $table->date('pro_fecha_vencimiento_registro');
        $table->smallInteger('pro_habilitado');
        $table->text('pro_imagenes');
        $table->string('pro_iniciales', 10);
        $table->foreign('pro_centro')->references('id')->on('centros');    
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
        Schema::drop('programas');
    }
}
