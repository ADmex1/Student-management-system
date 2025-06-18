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
            $table->foreignId('faculty_id')->constrained()->cascadeonDelete();
            $table->foreignId('majors_id')->constrained()->cascadeonDelete();
            $table->foreignId('studyprograms_id')->constrained()->cascadeonDelete();
            $table->foreignId('lecturer_id')->constrained()->cascadeonDelete();
            $table->foreignId('academicyears_id')->nullable()->constrained()->nullonDelete();
            $table->string('code')->unique();
            $table->string('name');
            $table->unsignedInteger('credit');
            $table->unsignedInteger('semester');
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
