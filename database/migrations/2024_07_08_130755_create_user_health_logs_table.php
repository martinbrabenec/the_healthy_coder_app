<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHealthLogsTable extends Migration
{
    public function up()
    {
        Schema::create('user_health_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('log_type', ['food', 'activity']);
            $table->integer('value');
            $table->timestamp('logged_at');

            $table->index('user_id');
            $table->index('logged_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_health_logs');
    }
}
