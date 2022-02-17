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
        Schema::create('responsable_area', function (Blueprint $table) {
            $table->unsignedBigInteger('id_responsable');
            $table->unsignedBigInteger('id_area');
            $table->foreign('id_responsable')->references('id')->on('responsable');
            $table->foreign('id_area')->references('id')->on('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsable_area');
    }
};
