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
        Schema::create('studyresults', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->cascadeonDelete();
            $table->foreignId('academicyears_id')->constrained()->cascadeonDelete();
            $table->unsignedInteger('semester')->default(1);
            $table->double('GPS', 5, 2)->default(0);
            $table->double('GPA', 5 ,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studyresults');
    }
};
