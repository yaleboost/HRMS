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
        Schema::create('semesters', function (Blueprint $table) {
            $table->id();
            $table->string('scholarship_id');  // Foreign key to the scholarships table
            $table->string('employee_id');  // Foreign key to the scholarships table
            $table->integer('semester_no');  // The semester number (e.g., 1, 2, 3, ...)
            $table->string('semester_name');  // Full name for display (e.g., "Year 1, Semester 1")
            $table->date('start_date');  // Start date of the semester
            $table->date('end_date');  // End date of the semester
            $table->enum('status', ['active', 'completed', 'failed'])->default('active');  // Status of the semester
            $table->string('result')->nullable();  // Result of the semester (e.g., a link to the uploaded result file)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semesters');
    }
};
