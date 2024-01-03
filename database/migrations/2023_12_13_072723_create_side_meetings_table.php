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
        Schema::create('side_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('days_drop')->nullable();
            $table->string('meeting_room_drop')->nullable();
            $table->string('time_drop')->nullable();
            $table->string('reserved_by')->nullable();
            $table->string('reservee')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('side_meetings');
    }
};
