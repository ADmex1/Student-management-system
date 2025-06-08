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
        Schema::table('users', function (Blueprint $table) {
             $table->unsignedBigInteger('student_id')->nullable()->unique()->after('id');
            $table->string('NIM')->nullable()->unique()->after('student_id');
            $table->string('api_key')->nullable()->unique()->after('password');

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
              $table->dropForeign(['student_id']);
            $table->dropColumn(['student_id', 'NIM', 'api_key']);
        });
    }
};
