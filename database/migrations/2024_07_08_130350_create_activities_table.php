<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('is_public');
            $table->boolean('is_favorite');
            $table->enum('activity_type', ['sport', 'coder']);
            $table->timestamps();

            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
