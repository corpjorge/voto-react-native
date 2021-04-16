<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();         
            $table->string('celular')->nullable();
            $table->string('correo')->nullable();            
            $table->string('tipo')->nullable();
            $table->string('titulo')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('archivo1')->nullable();           
            $table->string('estado')->nullable();    
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
        Schema::dropIfExists('clasificados');
    }
}
