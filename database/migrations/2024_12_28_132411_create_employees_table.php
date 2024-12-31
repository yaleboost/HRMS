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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();  // Auto-incrementing primary key
            $table->string('fname');         // First name
            $table->string('mname');         // Middle name
            $table->string('lname');         // Last name
            $table->string('email')->unique();   // Email should be unique
            $table->string('number')->unique();  // Employee number or phone number, should be unique
            $table->date('datebirth');           // Date of birth (use date type)
            $table->enum('gender', ['male', 'female', 'other']); // Gender (use enum for consistency)
            $table->string('employee_type');
            $table->string('position');        // Job position
            $table->string('department');      // Department the employee belongs to
            $table->decimal('salary', 8, 2);   // Salary (use decimal for accurate financial data)
            $table->string('contactname');     // Contact name (in case of emergency)
            $table->string('contactphone');    // Contact phone (in case of emergency)
            $table->timestamps();  // Created at, updated at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
