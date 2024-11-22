<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListingCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('listing_categories')->insert([
            [
                'name' => 'Sale',
                'description' => 'Items available for sale.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Buy',
                'description' => 'Items wanted for purchase.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Auction',
                'description' => 'Items available for auction.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
