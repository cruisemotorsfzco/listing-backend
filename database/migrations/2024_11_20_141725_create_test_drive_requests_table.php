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
        Schema::create('test_drive_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // User who requested the test drive
            $table->unsignedBigInteger('car_id'); // Car the test drive is for
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->date('preferred_date'); // User's preferred date
            $table->time('preferred_time')->nullable(); // User's preferred time
            $table->string('driver_license_number');
            $table->unsignedBigInteger('driver_license_upload_id')->nullable(); // Path to uploaded license file
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('car_id')->references('id')->on('cars')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('driver_license_upload_id')->references('id')->on('uploads')->nullOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_drive_requests');
    }
};
