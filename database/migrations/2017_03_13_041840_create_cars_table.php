<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->string('plate_number',20);
            $table->integer('model');
            $table->string('color',100)->nullable();
            $table->string('engine_serial',30);
            $table->bigInteger('km_mi');
            $table->integer('brand')->unsigned();
            $table->foreign('brand')->references('id')->on('brands')->onDelete('cascade');
            $table->primary('plate_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
