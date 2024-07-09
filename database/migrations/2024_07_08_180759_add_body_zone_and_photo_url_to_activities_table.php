<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddBodyZoneAndPhotoUrlToActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->enum('body_zone', [
                'Posture & Sitting',
                'Neck & Upper Body',
                'Hand & Wrist',
                'Head & Eyes',
                'Lower Body & General'
            ])->nullable();
            $table->string('photo_url')->nullable();
        });

        // Update existing records where activity_type is 'coder'
        DB::table('activities')
            ->where('activity_type', 'coder')
            ->update(['body_zone' => 'Posture & Sitting']); // Example value, update as needed
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->dropColumn('body_zone');
            $table->dropColumn('photo_url');
        });
    }
}
