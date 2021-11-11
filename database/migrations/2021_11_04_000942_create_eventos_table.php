<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_evento')->default('nuevo_evento');
            $table->string('contraseña_del_evento',40);
            $table->string('nombre_1',64)->default('');
            $table->string('nombre_2',64)->default('');
            $table->string('fecha_evento',10)->default('27-10-2099');
            $table->string('hora_evento',5)->default('00:00');
            $table->boolean('no_niños')->default('0');
            $table->char('codigo_de_vestimenta',1)->default('0');
            $table->string('ruta_foto_novios')->default('');
            $table->string('mensaje_principal')->default('nuestra boda');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
