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
        Schema::create('computadora', function (Blueprint $table) {
            $table->id();
            $table->string('numero_identificacion');
            $table->unsignedBigInteger('id_dispositivo');
            $table->foreign('id_dispositivo')->references('id')->on('dispositivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computadora');
    }
};
