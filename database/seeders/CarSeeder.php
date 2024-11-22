<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'code' => Str::random(10),
                'slug' => Str::slug('First Car'),
                'name' => 'First Car',
                'vin' => '1HGCM82633A004352',
                'engine_number' => 'ENG12345678',
                'production_year' => '2019',
                'car_make_id' => 1, // Assuming a 'car_makes' record with ID 1 exists
                'car_model_id' => 1, // Assuming a 'car_models' record with ID 1 exists
                'condition' => 'New',
                'transmission' => 'Automatic',
                'variant_details' => 'Full option',
                'description' => 'This is a detailed description of the first car.',
                'features' => json_encode(['AC', 'Radio', 'Bluetooth']),
                'technical_features' => json_encode(['4*4']),
                'steering_type' => 'LHD',
                'fuel_type' => 'Petrol',
                'no_of_seats' => 4,
                'no_of_doors' => 4,
                'kilometers' => 0,
                'is_premium' => true,
                'user_id' => 1, // Assuming a 'users' record with ID 1 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more cars as needed
        ]);
    }
}
