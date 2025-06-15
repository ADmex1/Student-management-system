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
        Schema::create('course_week', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('courses_id');
            $table->unsignedBigInteger('course_week')->nullable();
            $table->String('title');
            $table->String('description');
            $table->timestamps();

        
            $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade');
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
