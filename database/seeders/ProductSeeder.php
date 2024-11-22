<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'code' => 'PROD001',
                'thumbnail' => null,
                'name' => 'Product One',
                'slug' => Str::slug('Product One'),
                'product_category_id' => 1,
                'product_sub_category_id' => 1,
                'car_make_id' => 1,
                'car_model_id' => 1,
                'sku' => 'SKU001',
                'short_description' => 'This is a short description of Product One.',
                'long_description' => 'This is a longer description of Product One, with more details and information.',
                'price' => 99.99,
                'discount' => 5.00,
                'opening_stock' => 100,
                'is_featured' => true,
                'is_published' => true,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'PROD002',
                'thumbnail' => null,
                'name' => 'Product Two',
                'slug' => Str::slug('Product Two'),
                'product_category_id' => 2,
                'product_sub_category_id' => 2,
                'car_make_id' => null,
                'car_model_id' => null,
                'sku' => 'SKU002',
                'short_description' => 'Short description for Product Two.',
                'long_description' => 'Long description for Product Two, with extensive details.',
                'price' => 199.99,
                'discount' => 0,
                'opening_stock' => 50,
                'is_featured' => false,
                'is_published' => true,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more products as needed
        ]);
    }
}
