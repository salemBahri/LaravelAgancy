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
        Schema::create('settings', function (Blueprint $table) {
            $table->id(); // Unique identifier for each setting entry
            $table->string('agency_name'); // Name of the agency
            $table->string('logo')->nullable(); // Logo URL or path (nullable)
            $table->string('address')->nullable(); // Address of the agency (nullable)
            $table->string('phone')->nullable(); // Contact phone number (nullable)
            $table->string('email')->nullable(); // Contact email (nullable)
            $table->text('description')->nullable(); // Description or mission statement (nullable)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
