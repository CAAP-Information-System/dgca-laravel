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
        Schema::create('accomp_flight_information', function (Blueprint $table) {
            $table->id();
            // Basic Information
            $table->string('salutation');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('passport_num');
            $table->string('gender');
            $table->string('address');
            $table->string('country');
            // Flight Details
            // Arrival
            $table->string('arrival_flight_num');
            $table->date('arrival_date');
            $table->time('arrival_time');
            // Departure
            $table->string('departure_flight_num');
            $table->date('departure_date');
            $table->time('departure_time');
            // Additionals
            $table->string('preferred_activity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accomp_flight_information');
    }
};
