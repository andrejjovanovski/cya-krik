<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 6; $i++) {
            Product::create([
                'name' => 'Product ' . $i,
                'price' => rand(100, 900),
                'short_description' => '',
            ]);
        }
    }
}
