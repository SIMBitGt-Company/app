<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogStateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_state_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('order')->unsigned();
            $table->foreign('order')->references('id')->on('service_orders')->onDelete('cascade');
            $table->integer('new_state')->unsigned();
            $table->foreign('new_state')->references('id')->on('state_orders')->onDelete('cascade');
            $table->integer('mechanic')->unsigned();
            $table->foreign('mechanic')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_state_orders');
    }
}
