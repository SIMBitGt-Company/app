<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32);
            $table->string('email',200)->unique();
            $table->string('nit',12)->unique()->nullable();
            $table->string('direction',200);
            $table->string('phone',10);
            $table->string('phone2',10)->nullable();
            $table->string('password',64);
            $table->integer('id_rol')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_rol')
                ->references('id')
                ->on('rols')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
