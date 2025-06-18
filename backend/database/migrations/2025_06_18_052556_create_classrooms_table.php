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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faculty_id')->constrained()->oncascadeDelete();
            $table->foreignId('majors_id')->constrained()->oncascadeDelete();
            $table->foreignId('studyprograms_id')->constrained()->oncascadeDelete();
            $table->foreignId('academicyears_id')->constrained()->oncascadeDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
