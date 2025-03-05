<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'title' => 'Electornics Product',
            'description' => 'This is the description for Product 1.',
            'price' => 19.99,
            'category' => 'electronics',
        ]);

        Product::create([
            'title' => 'Normal Product',
            'description' => 'This is the description for Product 2.',
            'price' => 29.99,
            'category' => 'food',
        ]);

        Product::create([
            'title' => 'Special Product',
            'description' => 'This is the description for Product 3.',
            'price' => 39.99,
            'category' => 'furniture',
        ]);
    }
}