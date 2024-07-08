<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInteractionsTable extends Migration
{
    public function up()
    {
        Schema::create('user_interactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('interactable_type', ['recipe', 'activity', 'other_item']);
            $table->unsignedBigInteger('interactable_id');
            $table->enum('interaction_type', ['like', 'dislike']);
            $table->timestamps();

            // Modified unique constraint with shorter name
            $table->unique(['user_id', 'interactable_type', 'interactable_id'], 'user_interactions_unique');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_interactions');
    }
}
