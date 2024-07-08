<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Rename the existing 'name' column to 'first_name'
            $table->renameColumn('name', 'first_name');
            
            // Add new columns
            $table->string('last_name')->after('name');
            $table->date('date_of_birth')->nullable()->after('email');
            $table->string('profile_picture')->nullable()->after('date_of_birth');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Rename 'first_name' back to 'name'
            $table->renameColumn('first_name', 'name');
            
            // Drop the new columns
            $table->dropColumn('last_name');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('profile_picture');
        });
    }
};
