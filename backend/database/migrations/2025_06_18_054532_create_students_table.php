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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeonDelete();
            $table->foreignId('faculty_id')->constrained()->cascadeonDelete();
            $table->foreignId('majors_id')->constrained()->cascadeonDelete();
            $table->foreignId('studyprograms_id')->constrained()->cascadeonDelete();
            $table->foreignId('classroom_id')->nullable()->constrained()->nullonDelete();
            $table->string('NIM')->unique();
            $table->unsignedInteger('semester')->default(1);
            $table->year('batch');
            $table->foreignId('group_fee_id')->nullable()->constrained()->nullonDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
