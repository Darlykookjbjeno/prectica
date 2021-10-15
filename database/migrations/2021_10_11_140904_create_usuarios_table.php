<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_user');
            $table->string(column: 'identification');
            $table->string(column: 'name');
            $table->string(column: 'last_name');
            $table->string(column: 'email');
            $table->string(column: 'password');
            $table->string(column: 'telephone');
            $table->string(column: 'avatar')->nullable();
            $table->unsignedBigInteger(column: 'role_id');
            $table->unsignedBigInteger(column: 'session_id');
            $table->foreign('session_id')->references('id_session')->on('sessions');
            $table->foreign('role_id')->references('id_role')->on('roles');
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
        Schema::dropIfExists('usuarios');
    }
}
