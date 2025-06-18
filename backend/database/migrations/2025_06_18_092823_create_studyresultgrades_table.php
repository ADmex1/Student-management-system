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
        Schema::create('studyresultgrades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('studyresult_id')->constrained()->cascadeonDelete();
            $table->foreignId('course_id')->constrained()->cascadeonDelete();
            $table->char('grade_letter');
            $table->double('weight_of_value', 5 ,2 )->default(0);
            $table->double('grade', 5,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studyresultgrades');
    }
};
