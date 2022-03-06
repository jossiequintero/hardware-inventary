<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivo', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('descripcion');
            $table->string('marca');
            $table->string('modelo');
            $table->string('numero_serie');
            $table->string('numero_identificacion');
            $table->date('fecha_instalacion');
            $table->date('fecha_mantenimiento');
            $table->string('estado');
            $table->unsignedBigInteger('id_area');
            $table->foreign('id_area')->references('id')->on('area');
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
        Schema::dropIfExists('dispositivo');
    }
};
