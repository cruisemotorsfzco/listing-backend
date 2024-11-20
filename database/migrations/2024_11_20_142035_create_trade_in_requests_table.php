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
        Schema::create('trade_in_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // User who submitted the trade-in request
            $table->unsignedBigInteger('car_id')->nullable(); // Optionally, link to a car in the system
            $table->string('year'); // Car year
            $table->string('make'); // Manufacturer
            $table->string('model'); // Model
            $table->string('version')->nullable(); // Optional version detail
            $table->string('mileage'); // Mileage in KM
            $table->string('accident_history')->nullable(); // Accident history
            $table->string('specifications')->nullable(); // Specifications like GCC, US, etc.
            $table->string('location'); // Location of the car
            $table->string('mobile'); // User's mobile number
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('car_id')->references('id')->on('cars')->nullOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trade_in_requests');
    }
};
