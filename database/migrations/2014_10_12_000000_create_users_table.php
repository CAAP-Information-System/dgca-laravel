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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // Authentication
            $table->string('email')->unique();

            // Personal Details
            $table->string('access_role')->default('user');
            $table->string('status')->default('Pending');
            $table->string('salutation');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('passport_num');
            $table->string('designation');
            $table->string('gender');
            $table->string('address');
            $table->string('telephone');
            $table->string('mobile');
            $table->string('passport_photo')->nullable();
            $table->string('profile_image')->nullable();

            // Conference Details
            $table->string('badge_name');
            $table->string('conference_role');
            $table->string('country');
            $table->string('organization');

            // Flight Details
            // Arrival
            $table->string('arrival_flight_num');
            $table->date('arrival_date');
            $table->time('arrival_time');
            // Departure
            $table->string('departure_flight_num');
            $table->date('departure_date');
            $table->time('departure_time');

            // Accomodations & Preferences
            $table->string('airport_destination');
            $table->string('hotel_reco')->nullable();
            $table->integer('neck')->nullable();;
            $table->integer('shoulder')->nullable();;
            $table->string('attire_special_req')->nullable();;
            $table->string('preferred_activity')->nullable();;
            $table->string('dietary_restrictions')->default('None')->nullable();
            $table->string('dietary_special_req')->default('None')->nullable();

            // Accompanying Person/Spouse
            $table->string('has_spouse')->nullable();;

            // Copyright & Privacy Policy
            $table->string('privacy')->default('Unapproved');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
