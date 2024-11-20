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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('vin')->nullable();
            $table->string('engine_number')->nullable();
            $table->string('production_year')->nullable();
            $table->unsignedBigInteger('car_make_id')->nullable();
            $table->unsignedBigInteger('car_model_id')->nullable();
            $table->unsignedBigInteger('car_variant_id')->nullable();
            $table->unsignedBigInteger('car_body_type_id')->nullable();
            $table->unsignedBigInteger('car_category_id')->nullable();
            $table->unsignedBigInteger('car_regional_spec_id')->nullable();
            $table->enum('condition', ['New', 'Used'])->nullable();
            $table->enum('transmission', ['Manual', 'Automatic'])->nullable();
            $table->text('variant_details')->nullable();
            $table->text('description')->nullable();
            $table->text('features')->nullable()->comment('AC, Radio, Aux, Bluetoth, ...');
            $table->text('technical_features')->nullable()->comment(('4*4,All wheel steering,...'));
            $table->enum('steering_type', ['LHD', 'RHD'])->nullable();
            $table->enum('fuel_type', ['Petrol', 'Diesel', 'Electric', 'Hybrid'])->nullable()->comment('petrol, diesel, electric, hybrid');
            $table->integer('no_of_seats')->nullable();
            $table->integer('no_of_doors')->nullable();
            $table->unsignedBigInteger('badge_id')->nullable();
            // $table->unsignedBigInteger('dealer_id')->nullable();
            $table->string('export_status')->nullable();
            $table->string('fuel_tank_capacity')->nullable();
            $table->string('ext_color')->nullable();
            $table->string('int_color')->nullable();
            $table->string('horse_power')->nullable();
            $table->string('engine_capacity')->nullable();
            $table->string('warranty')->nullable();
            $table->double('kilometers')->nullable()->comment('how many kilometers run');
            $table->double('average_on_road')->nullable();
            $table->boolean('is_premium')->default(0);
            $table->string('discount')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cars', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('car_make_id')->references('id')->on('car_makes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('car_model_id')->references('id')->on('car_models')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('car_variant_id')->references('id')->on('car_variants')->cascadeOnUpdate()->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
