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
        Schema::create('auction_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('auction_id');
            $table->morphs('auctionable_item'); // Polymorphic relation columns auctionable_item_id and auctionable_item_type
            $table->enum('auction_item_type', ['car', 'vehicle_registration_number', 'product']);
            $table->double('starting_price')->default(0);
            $table->double('final_price')->default(0);
            $table->enum('status', ['in-stock', 'sold'])->default('in-stock');
            $table->unsignedBigInteger('winner_id')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('auction_id')->references('id')->on('auctions')->onDelete('cascade');
            $table->foreign('winner_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auction_items');
    }
};
