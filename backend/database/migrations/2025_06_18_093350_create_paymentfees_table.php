<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\enums\PaymentStatus;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paymentfees', function (Blueprint $table) {
            $table->id();
            $table->string('payment_code');
            $table->foreignId('student_id')->constrained()->cascadeonDelete();
            $table->foreignId('group_fee_id')->constrained()->cascadeonDelete();
            $table->foreignId('academicyears_id')->constrained()->cascadeonDelete();
            $table->unsignedInteger('semester');
            $table->string('status')->default(PaymentStatus::PENDING->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paymentfees');
    }
};
