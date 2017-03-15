<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_mails', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('subject',250);
            $table->integer('order')->unsigned();
            $table->foreign('order')->references('id')->on('service_orders')->onDelete('cascade');
            $table->integer('user')->unsigned();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_mails');
    }
}
