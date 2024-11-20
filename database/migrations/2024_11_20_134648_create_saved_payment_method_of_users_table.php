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
        Schema::create('saved_payment_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('payment_method_id')->nullable()->constrained('payment_methods')->nullOnDelete(); // Optional link to global payment_methods
            $table->string('customer_name')->nullable(); 
            $table->string('card_number')->nullable(); 
            $table->string('expiry_date')->nullable(); 
            $table->string('cardholder_name')->nullable(); 
            $table->string('type')->nullable(); // e.g., credit_card, bank_transfer, etc.
            $table->boolean('is_default')->default(false); // Indicates default payment method
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saved_payment_method_of_users');
    }
};
