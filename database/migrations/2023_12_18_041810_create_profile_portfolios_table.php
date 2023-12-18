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
        Schema::create('profile_portfolios', function (Blueprint $table) {
            $table->id();
            $table->text('img');
            $table->unsignedBiginteger('category_id')->unsigned();
            $table->unsignedBiginteger('user_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('profilecategories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_portfolios');
    }
};
