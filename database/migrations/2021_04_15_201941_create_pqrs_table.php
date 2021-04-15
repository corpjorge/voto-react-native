<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePQRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pqrs', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('cedula')->nullable();
            $table->string('celular')->nullable();
            $table->string('correo')->nullable();
            $table->string('oficinas')->nullable();
            $table->string('tipo')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('archivo1')->nullable();
            $table->string('archivo2')->nullable();
            $table->string('estado')->nullable();            
            $table->string('fecha_atendido')->nullable();
            $table->string('fecha_cierre')->nullable();
            $table->string('archivo_antendido')->nullable();
            $table->string('archivo_cierre')->nullable();
            $table->text('observacion')->nullable();        
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
        Schema::dropIfExists('pqrs');
    }
}
