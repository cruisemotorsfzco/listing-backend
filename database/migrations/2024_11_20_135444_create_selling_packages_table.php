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
        Schema::create('selling_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Package name (e.g., Premium, Featured, VIP Home)
            $table->decimal('price', 8, 2); // Package price (e.g., AED 199)
            $table->string('description')->nullable(); // Package brief description
            $table->json('features')->nullable(); // Features in JSON format
            $table->integer('validity_days'); // Number of days the package is valid
            $table->integer('refresh_count')->nullable(); // Number of refreshes included
            $table->timestamps();
            $table->softDeletes();
        });

        // Schema::table('users', function (Blueprint $table) {
        //     $table->foreign('package_id')->references('id')->on('selling_packages')->nullOnDelete()->cascadeOnUpdate();
        // }); //
        // Schema::table('users', function (Blueprint $table) {
        //     $table->foreign('package_id')->references('id')->on('selling_packages')->nullOnDelete()->cascadeOnUpdate(); // Foreign key constraint
        // }); //

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selling_packages');
    }
};
