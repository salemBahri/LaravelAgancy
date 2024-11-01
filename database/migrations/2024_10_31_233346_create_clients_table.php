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
        Schema::create('clients', function (Blueprint $table) {
           
                $table->id();  // Primary key
                $table->unsignedBigInteger('user_id');  // Foreign key for user
                $table->unsignedBigInteger('client_id')->nullable();  // Foreign key for client, nullable in case a client is not assigned
                $table->string('name');  // Project name
                $table->text('description')->nullable();  // Project description
                $table->date('start_date')->nullable();  // Project start date
                $table->date('end_date')->nullable();  // Project end date
                $table->enum('status', ['planned', 'in_progress', 'completed', 'on_hold', 'canceled'])->default('planned');  // Status field with predefined values
                $table->decimal('budget', 15, 2)->nullable();  // Budget for the project
                $table->string('technologies_used')->nullable();  // Tags for technologies used, stored as a string
                $table->timestamps();  // Created at and updated at
    
                // Foreign key constraints
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  // If a user is deleted, delete their projects
                $table->foreign('client_id')->references('id')->on('clients')->onDelete('set null');  // If a client is deleted, set client_id to null
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
