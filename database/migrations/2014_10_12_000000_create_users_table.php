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
            $table->string('name');
            $table->string('sur_name');
            $table->string('email')->unique();
            $table->string('birth_date');
            $table->string('start_date');
            $table->string('graduated_date');
            $table->string('school_id');
            $table->string('identity_id');
            $table->string('department');
            $table->string('country');
            $table->string('password');
            $table->string('auth');
            $table->string('provider');
            $table->string('provider_id');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }

}