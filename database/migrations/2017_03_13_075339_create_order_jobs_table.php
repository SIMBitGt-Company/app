<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_jobs', function (Blueprint $table) {
            $table->integer('order')->unsigned();
            $table->foreign('order')->references('id')->on('service_orders')->onDelete('cascade');
            $table->integer('job')->unsigned();
            $table->foreign('job')->references('id')->on('jobs')->onDelete('cascade');
            $table->integer('amount');
            $table->decimal('price',5,2);
            $table->decimal('subtotal',5,2);
            $table->primary(['order', 'job']);

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_jobs');
    }
}
