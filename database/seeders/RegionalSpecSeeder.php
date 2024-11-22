<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RegionalSpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regional_specs')->insert([
            [
                'code' => 'EU',
                'name' => 'European Specs',
                'slug' => Str::slug('European Specs'),
                'description' => 'Compliant with European safety and emissions regulations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'US',
                'name' => 'American Specs',
                'slug' => Str::slug('American Specs'),
                'description' => 'Compliant with American safety and emissions standards, including specific modifications for safety.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'GCC',
                'name' => 'GCC Specs',
                'slug' => Str::slug('GCC Specs'),
                'description' => 'Adapted for the Gulf Cooperation Council countries, featuring enhanced air conditioning and cooling systems.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more specifications as needed
        ]);
    }
}
