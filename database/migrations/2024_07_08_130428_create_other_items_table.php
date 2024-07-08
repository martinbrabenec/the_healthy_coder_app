<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherItemsTable extends Migration
{
    public function up()
    {
        Schema::create('other_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('is_public');
            $table->boolean('is_favorite');
            $table->timestamps();

            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('other_items');
    }
}
