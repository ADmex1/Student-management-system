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
        Schema::create('lecturers', function (Blueprint $table){
        $table->id();
            $table->unsignedBigInteger('user_id')->unique(); // Link to users
        $table->string('NID');
        $table->string('name');
        $table->string('email')->unique();
        $table->string('phone_number');
        $table->string('place_of_origin')->nullable();
        $table->string('address')->nullable();
        $table->date('date_of_birth')->nullable();
        $table->unsignedBigInteger('studyprogram_id');
        $table->unsignedBigInteger('faculty_id');
        $table->timestamps();
        
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Link to users
        $table->foreign('studyprogram_id')->references('id')->on('studyprograms')->onDelete('cascade');
        $table->foreign('faculty_id')->references('id')->on('faculty')->onDelete('cascade');
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
