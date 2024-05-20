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
        Schema::table('accomp_flight_information', function (Blueprint $table) {
            $table->string('name_of_delegate')->after('departure_time');
            $table->string('mobile')->after('last_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accomp_flight_information', function (Blueprint $table) {
            //
        });
    }
};
