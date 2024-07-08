<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRankingsTable extends Migration
{
    public function up()
    {
        Schema::create('user_rankings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('rankable_type', ['recipe', 'activity', 'other_item']);
            $table->unsignedBigInteger('rankable_id');
            $table->integer('ranking');
            $table->timestamps();

            $table->unique(['user_id', 'rankable_type', 'rankable_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_rankings');
    }
}
