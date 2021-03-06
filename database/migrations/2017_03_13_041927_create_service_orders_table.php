<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('observations',450)->nullable();
            $table->decimal('fuel_level', 5, 2);
            $table->decimal('km_mi', 8, 2);
            $table->integer('state')->unsigned();
            $table->foreign('state')->references('id')->on('state_orders')->onDelete('cascade');
            $table->integer('user')->unsigned();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('contact')->unsigned();
            $table->foreign('contact')->references('id')->on('users')->onDelete('cascade');
            $table->integer('mechanic')->unsigned();
            $table->foreign('mechanic')->references('id')->on('users')->onDelete('cascade');
            $table->string('vehicle',20);
            $table->foreign('vehicle')->references('plate_number')->on('cars')->onDelete('cascade');
            $table->string('urlImg1',200)->nullable();
            $table->string('urlImg2',200)->nullable();
            $table->string('urlImg3',200)->nullable();
            $table->string('urlImg4',200)->nullable();
            $table->string('urlImg5',200)->nullable();
            $table->string('urlImg6',200)->nullable();
            $table->decimal('total',5,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_orders');
    }
}
