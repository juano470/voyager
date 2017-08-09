<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('noticias', function (Blueprint $table){

        $table->bigIncrements('id');
        $table->unsignedBigInteger('not_programa');    
        $table->string('not_nombre', 50);    
        $table->text('not_descripcion');    
        $table->text('not_imagen');    
        $table->date('not_fecha');
        $table->smallInteger('not_tipo');    
        $table->foreign('not_programa')->references('id')->on('programas');  
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
        Schema::drop('noticias');
        //
    }
}
