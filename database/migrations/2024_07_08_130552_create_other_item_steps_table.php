<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherItemStepsTable extends Migration
{
    public function up()
    {
        Schema::create('other_item_steps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('other_item_id')->constrained('other_items')->onDelete('cascade');
            $table->integer('step_number');
            $table->text('description');

            $table->index('other_item_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('other_item_steps');
    }
}
