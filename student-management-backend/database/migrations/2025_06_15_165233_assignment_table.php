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
        Schema::create('assignment', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('course_week_id');
            $table->string('title');
            $table->string('description');
            $table->dateTime('deadline')->nullable();
            $table->timestamps();

            $table->foreign('course_week_id')->references('id')->on('course_week')->onDelete('cascade');
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
