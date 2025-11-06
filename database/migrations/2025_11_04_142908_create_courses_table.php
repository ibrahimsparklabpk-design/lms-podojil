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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('course_title' , 255);
            $table->string('course_type' , 255);
            $table->decimal('course_price');
            $table->string('course_level');
            $table->text('course_description')->nullable();

         // Course Details
            $table->integer('course_duration_weeks')->nullable();
            $table->integer('course_total_hours')->nullable();
            $table->string('course_language')->nullable();
            $table->string('course_thumbnail')->nullable();   

             // Resources
            $table->string('course_book')->nullable();         
            $table->string('course_video')->nullable();    


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
