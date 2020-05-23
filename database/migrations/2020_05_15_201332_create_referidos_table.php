<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referidos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('parent_id');
            $table->string("fecha_de_ingreso");
            $table->string("fecha_de_activacion");
            $table->double('total_ganancias');
            $table->integer('veces_activada');
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
        Schema::dropIfExists('referidos');
    }
}
