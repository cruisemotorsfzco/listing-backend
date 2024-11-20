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
        Schema::create('price_drop_notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete(); // User who wants the notification
            $table->foreignId('car_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete(); // Car they are tracking
            $table->boolean('notified')->default(false); // Indicates whether the user has been notified
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_drop_notifications');
    }
};
