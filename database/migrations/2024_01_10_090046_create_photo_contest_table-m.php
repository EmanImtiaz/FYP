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
        Schema::create('photo_contest', function (Blueprint $table) {
        $table->id();
        $table->text('contest_img');
        $table->string('description');
        $table->string('views');
        $table->longText('tags');

        $table->timestamps();
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
