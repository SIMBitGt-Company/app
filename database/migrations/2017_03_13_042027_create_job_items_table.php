<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job')->unsigned();
            $table->foreign('job')->references('id')->on('jobs')->onDelete('cascade');
            $table->integer('item')->unsigned();
            $table->foreign('item')->references('id')->on('items')->onDelete('cascade');
            $table->integer('amount');

            $table->unique(['item', 'job']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_items');
    }
}
