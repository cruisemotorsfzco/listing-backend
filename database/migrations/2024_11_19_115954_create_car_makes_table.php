<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_makes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('logo')->nullable();
            $table->string('official_website')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cars', function (Blueprint $table) {
            $table->foreign('car_make_id')->references('id')->on('car_makes')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_makes');
    }
};
