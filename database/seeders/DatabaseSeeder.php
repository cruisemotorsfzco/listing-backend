<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CompanySeeder::class,
            BadgeSeeder::class,
            CarBodyTypeSeeder::class,
            CarBodyTypeSeeder::class,
            CarMakeSeeder::class,
            CarSeeder::class,
            CarVariantSeeder::class,
            // CitySeeder::class,
            CountrySeeder::class,
            ListingCategorySeeder::class,
            PaymentMethodSeeder::class,
            ProductCategorySeeder::class,
            ProductSeeder::class,
            RegionalSpecSeeder::class,
            ProductSubCategorySeeder::class,
            StateSeeder::class
        ]);
    }
}
