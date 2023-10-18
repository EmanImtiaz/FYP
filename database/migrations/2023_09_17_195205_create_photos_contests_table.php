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
        Schema::create('photos_contests', function (Blueprint $table) {
            $table->id();
            $table->text('contest_img');
            $table->bigInteger('likes');
            $table->bigInteger('dislikes');
            $table->string('photographer_name');
            $table->text('photographerprofile_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos_contests');
    }
};
