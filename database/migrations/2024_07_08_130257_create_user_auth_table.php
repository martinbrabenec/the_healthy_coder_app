<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAuthTable extends Migration
{
    public function up()
    {
        Schema::create('user_auth', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('password_hash');
            $table->string('password_salt');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_auth');
    }
}
