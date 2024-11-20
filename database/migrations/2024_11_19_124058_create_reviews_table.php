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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('car_id'); 
            $table->text('review'); 
            $table->unsignedTinyInteger('rating')->comment('Rating out of 5'); 
            $table->timestamps(); 
            $table->softDeletes(); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};