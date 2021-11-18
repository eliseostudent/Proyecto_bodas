<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLugarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evento_id')->constrained();
            $table->string('nombre_ceremonia')->default('');
            $table->string('direccion_ceremonia')->default('');
            $table->string('ruta_foto_ceremonia')->default('');
            $table->string('fecha_ceremonia')->default('');
            $table->string('nombre_salon')->default('');
            $table->string('direccion_salon')->default('');
            $table->string('ruta_foto_salon')->default('');
            $table->string('fecha_salon')->default('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lugars');
    }
}
