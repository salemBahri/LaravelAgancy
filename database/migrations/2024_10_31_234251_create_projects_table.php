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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();  // Primary key: unique identifier for each project
            $table->unsignedBigInteger('user_id');  // Foreign key linking to the users table
            $table->unsignedBigInteger('client_id')->nullable();  // Foreign key linking to the clients table, nullable if no client
            $table->string('title');  // Title of the project
            $table->text('description')->nullable();  // Detailed description of the project
            $table->date('start_date')->nullable();  // Start date of the project
            $table->date('end_date')->nullable();  // End date of the project, null if ongoing
            $table->boolean('is_current')->default(false);  // Boolean to indicate if the project is ongoing
            $table->string('technologies_used')->nullable();  // Technologies used, stored as a string or tags
            $table->string('project_url')->nullable();  // URL link to the project (e.g., GitHub or live site)
            $table->timestamps();  // Timestamps: created_at and updated_at

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  // Cascade delete on user
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('set null');  // Set null on client deletion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
