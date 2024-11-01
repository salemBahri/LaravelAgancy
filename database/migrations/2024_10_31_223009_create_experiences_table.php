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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('job_title');
            $table->string('company_name');
            $table->string('location')->nullable(); // Optional location of the job
            $table->json('technologies_used')->nullable(); // Stores tags for technologies used
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->text('description')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Create the foreign key

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
