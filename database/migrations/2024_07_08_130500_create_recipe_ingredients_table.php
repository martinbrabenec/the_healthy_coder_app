<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeIngredientsTable extends Migration
{
    public function up()
    {
        Schema::create('recipe_ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recipe_id')->constrained('recipes')->onDelete('cascade');
            $table->string('ingredient');
            $table->string('quantity');
            $table->string('unit');

            $table->index('recipe_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipe_ingredients');
    }
}

