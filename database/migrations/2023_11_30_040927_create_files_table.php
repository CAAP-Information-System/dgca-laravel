<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Inserted category column, should determine where the document should be inserted or placed
     */
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('doc_status')->default('Pending');
            $table->string('name');
            $table->string('owner')->nullable();
            $table->date('upload_date');
            $table->integer('size');
            $table->string('file_category');
            $table->string('discussion_agenda')->nullable();
            $table->string('information_agenda')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
