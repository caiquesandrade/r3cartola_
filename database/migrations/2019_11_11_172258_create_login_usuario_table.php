<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('cpf', 11);
            $table->string('password');
            $table->timestamps();
            $table->create();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login_usuario');
    }
}
