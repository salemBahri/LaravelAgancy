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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->string('title'); // Title of the service
            $table->text('description')->nullable(); // Optional description of the service
            $table->decimal('price', 8, 2)->nullable(); // Price of the service two numbers after comma ,
            $table->integer('duration')->nullable(); // Duration of the service in minutes
            $table->string('image')->nullable(); // Optional image for the service
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
