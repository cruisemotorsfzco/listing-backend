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
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('new_name');
            $table->string('original_name');
            $table->string('path');
            $table->string('extension');
            $table->string('size')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
        });

        Schema::table('car_images', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('uploads')->cascadeOnUpdate()->cascadeOnDelete();
        });
        Schema::table('car_makes', function (Blueprint $table) {
            $table->foreign('logo')->references('id')->on('uploads')->cascadeOnUpdate()->cascadeOnDelete();
        });
        Schema::table('car_models', function (Blueprint $table) {
            $table->foreign('logo')->references('id')->on('uploads')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploads');
    }
};
