<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_variants')->insert([
            [
                'code' => Str::random(10),
                'name' => 'Base Model',
                'slug' => Str::slug('Base Model'),
                'car_make_id' => 1,  // Ensure this ID exists in your `car_makes` table
                'car_model_id' => 1, // Ensure this ID exists in your `car_models` table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => Str::random(10),
                'name' => 'Luxury Model',
                'slug' => Str::slug('Luxury Model'),
                'car_make_id' => 1,  // Ensure this ID exists in your `car_makes` table
                'car_model_id' => 1, // Ensure this ID exists in your `car_models` table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more variants as needed
        ]);
    }
}
