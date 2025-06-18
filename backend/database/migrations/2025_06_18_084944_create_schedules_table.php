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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faculty_id')->constrained()->cascadeonDelete();
            $table->foreignId('majors_id')->constrained()->cascadeonDelete();
            $table->foreignId('studyprograms_id')->constrained()->cascadeonDelete();
            $table->foreignId('course_id')->constrained()->cascadeonDelete();
            $table->foreignId('classroom_id')->constrained()->cascadeonDelete();
            $table->foreignId('academicyears_id')->cosntrained()->cascadeonDelete();
            $table->time('class_start');
            $table->time('class_end');
            $table->string('schedule_day');
            $table->unsignedInteger('quota')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
