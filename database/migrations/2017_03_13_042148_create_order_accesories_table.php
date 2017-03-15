<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderAccesoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_accesories', function (Blueprint $table) {
            $table->integer('order')->unsigned();
            $table->foreign('order')->references('id')->on('service_orders')->onDelete('cascade');
            $table->integer('accesorie')->unsigned();
            $table->foreign('accesorie')->references('id')->on('accesories')->onDelete('cascade');
            $table->string('observations',250)->nullable();
            $table->primary(['order', 'accesorie']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_accesories');
    }
}
