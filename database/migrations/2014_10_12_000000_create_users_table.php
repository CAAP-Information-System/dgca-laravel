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
            $table->string('is_DirectorGeneral')->nullable();
            $table->string('gender');
            $table->string('address');
            $table->string('telephone');
            $table->string('mobile');
            $table->string('passport_photo')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('approval_doc')->nullable();

            // Conference Details
            $table->string('badge_name');
            $table->string('conference_role');
            $table->string('country');
            $table->string('organization');

            // Accomodations & Preferences
            $table->string('airport_destination');
            $table->string('hotel_reco')->nullable();
            $table->string('otherHotel')->default('None')->nullable();
            $table->string('attire_size')->nullable();
            $table->string('attire_special_req')->default('None')->nullable();
            $table->string('preferred_activity')->nullable();
            $table->string('dietary_restrictions')->default('None')->nullable();
            $table->string('dietary_special_req')->default('None')->nullable();

            // Accompanying Person/Spouse
            $table->string('has_spouse')->nullable();
            $table->string('accomp_name')->nullable();

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
