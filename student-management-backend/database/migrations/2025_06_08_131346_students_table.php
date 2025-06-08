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
    $table->string('NIM')->unique();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('phone')->nullable();
    $table->string('place_of_origin')->nullable();
    $table->string('address')->nullable();
    $table->date('date_of_birth')->nullable();
    $table->string('highschool')->nullable();
    $table->unsignedBigInteger('studyprogram_id')->nullable();
    $table->unsignedBigInteger('faculty_id')->nullable();
    $table->timestamps();

    $table->foreign('faculty_id')->references('id')->on('faculty')->onDelete('cascade');
    $table->foreign('studyprogram_id')->references('id')->on('studyprograms')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
