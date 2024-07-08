<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->boolean('is_vegetarian');
            $table->boolean('is_public');
            $table->boolean('is_favorite');
            $table->string('photo')->nullable();
            $table->timestamps();
            
            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
