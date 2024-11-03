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
           
                $table->id(); 
                $table->unsignedBigInteger('user_id'); // Foreign key to users table
                $table->string('fullname');
                $table->string('email')->nullable();  // Project description
                $table->string('phone')->nullable();  // Project start date
                $table->string('company')->nullable();  // Project end date
                $table->string('company_website')->nullable();
                $table->string('image')->nullable();  // Budget for the project
                
                $table->timestamps();  // Created at and updated at
    
                // Foreign key constraints
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  // If a user is deleted, delete their projects
            
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
