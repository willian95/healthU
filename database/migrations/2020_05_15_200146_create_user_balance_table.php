<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_balance', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->double('balance_total');
            $table->double('balance_de_depositos');
            $table->double('balance_de_retiros');
            $table->double('balance_de_referidos');
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
        Schema::dropIfExists('user_balance');
    }
}
