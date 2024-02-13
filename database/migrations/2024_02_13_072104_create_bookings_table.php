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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('photographer_profile_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('province');
            $table->string('city');
            $table->string('town');
            $table->boolean('payment_method')->default(0);
            $table->text('evidence')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();
            $table->boolean('is_paid')->default(0);
            $table->text('remarks')->nullable();
            $table->float('total_amount')->default(0);
            $table->unsignedBigInteger('payment_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('photographer_profile_id')->references('id')->on('photographer_profiles')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
