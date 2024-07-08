<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFavoritesTable extends Migration
{
    public function up()
    {
        Schema::create('user_favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('favorable_type', ['recipe', 'activity', 'other_item']);
            $table->unsignedBigInteger('favorable_id');
            $table->timestamps();

            $table->unique(['user_id', 'favorable_type', 'favorable_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_favorites');
    }
}
