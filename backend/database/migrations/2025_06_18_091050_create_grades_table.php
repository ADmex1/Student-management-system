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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->cascadeonDelete();
            $table->foreignId('student_id')->constrained()->cascadeonDelete();
            $table->foreignId('classroom_id')->constrained()->cascadeonDelete();
            $table->unsignedInteger('grade')->default(0);
            $table->unsignedInteger('meetings')->nullable();
            $table->string('grade_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
