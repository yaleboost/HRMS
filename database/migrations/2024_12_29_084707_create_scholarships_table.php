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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');  // Foreign key to the employees table
            $table->string('course_name');  // The course name (e.g., MBA, BSc)
            $table->integer('duration');  // Duration of the course (in years)
            $table->enum('status', ['active', 'completed', 'terminated'])->default('active');  // Status of the scholarship
            $table->string('scholarship_type')->nullable();  // Add a column for scholarship type
            $table->decimal('amount', 8, 2)->nullable();    // Add a column for scholarship amount
            $table->date('grant_date')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
