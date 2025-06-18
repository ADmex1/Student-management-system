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
        Schema::create('studyplan_schedule', function (Blueprint $table) {
            $table->id();
            $table->foreignId('studyplan_id')->constrained()->cascadeonDelete();
            $table->foreignId('schedule_id')->constrained()->cascadeonDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studyplan_schedule');
    }
};
