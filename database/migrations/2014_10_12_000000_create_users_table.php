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
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('passport_num');
            $table->string('designation');
            $table->string('is_HOD')->nullable();
            $table->string('address');
            $table->string('telephone')->nullable();
            $table->string('mobile');
            $table->string('passport_photo')->nullable();
            $table->string('profile_image')->nullable();

            // Conference Details
            $table->string('badge_name')->nullable();
            $table->string('conference_role');
            $table->string('country');
            $table->string('organization');

            // Accomodations & Preferences
            $table->string('airport_destination');
            $table->string('hotel_reco')->nullable();
            $table->string('otherHotel')->default('None')->nullable();
            $table->string('attire_size')->nullable();
            $table->string('attire_special_req')->default('None')->nullable();
            $table->json('dietary_restrictions')->default('None')->nullable();
            $table->string('dietary_special_req')->default('None')->nullable();

            // Accompanying Person/Spouse
            $table->string('has_spouse')->nullable();
            $table->string('accomp_fname')->nullable();
            $table->string('accomp_lname')->nullable();

            // Copyright & Privacy Policy
            $table->string('privacy')->default('Unapproved');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
