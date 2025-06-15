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
        Schema::create('courses', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('lecturers_id');
            $table->string('code')->unique();
            $table->string('semester')->nullable();
            $table->string('name')->unique();
            $table->unsignedBigInteger('credits')->nullable();
            $table->text('description')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('studyprogram_id');
            $table->unsignedBigInteger('faculty_id');
            $table->timestamps();

            $table->foreign('lecturers_id')->references('id')->on('lecturers')->onDelete('cascade');
            $table->foreign('studyprogram_id')->references('id')->on('studyprograms')->onDelete('cascade');
            $table->foreign('faculty_id')->references('id')->on('faculty')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropifExists('courses');{
            $table->dropForeign(['studyprogram_id']);
            $table->dropForeign(['faculty_id']);
            $table->dropForeign(['lecturers_id']);
            $table->dropColumn(['code', 'semester', 'name', 'credits', 'description', 'email', 'website', 'studyprogram_id', 'faculty_id']);
        }
    }
};
