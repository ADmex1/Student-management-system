<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\enums\KRS;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('studyplans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->cascadeonDelete();
            $table->foreignId('academicyears_id')->constrained()->cascadeonDelete();
            $table->string('status')->default(KRS::PENDING->value);
            $table->string('notes')->nullable();
            $table->unsignedInteger('semester')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studyplans');
    }
};
