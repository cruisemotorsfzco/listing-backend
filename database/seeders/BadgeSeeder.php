<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('badges')->insert([
            [
                'code' => 'FIRST_OWNER',
                'name' => 'First Owner',
                'slug' => Str::slug('First Owner'),
                'description' => 'The vehicle has had only one owner since new.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'NO_ACCIDENT',
                'name' => 'No Accident',
                'slug' => Str::slug('No Accident'),
                'description' => 'The vehicle has never been involved in any accidents.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'IN_WARRANTY',
                'name' => 'In Warranty',
                'slug' => Str::slug('In Warranty'),
                'description' => 'The vehicle is still under manufacturer warranty.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
