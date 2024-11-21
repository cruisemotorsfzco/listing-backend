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
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('logo')->nullable();            $table->foreignId('car_make_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cars', function (Blueprint $table) {
            $table->foreign('car_model_id')->references('id')->on('cars')->cascadeOnUpdate()->cascadeOnDelete();
        });
        
        // Schema::table('products', function (Blueprint $table) {
        //     $table->foreign('car_model_id')->references('id')->on('car_models')->cascadeOnUpdate()->cascadeOnDelete();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_models');
    }
};
