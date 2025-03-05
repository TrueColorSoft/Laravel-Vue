<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Discount;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $electronics = Category::create(['name' => 'Electronics']);
        $fashion = Category::create(['name' => 'Fashion']);
        
        $product1 = Product::create([
            'title' => 'Smartphone',
            'description' => 'Latest smartphone',
            'price' => 1000,
            'category_id' => $electronics->id,
        ]);

        $product2 = Product::create([
            'title' => 'Jeans',
            'description' => 'Stylish jeans',
            'price' => 80,
            'category_id' => $fashion->id,
        ]);

        Discount::create([
            'discountable_type' => 'App\Models\Category',
            'discountable_id' => $electronics->id,
            'percentage' => 5,
        ]);
        
        Discount::create([
            'discountable_type' => 'App\Models\Product',
            'discountable_id' => $product1->id,
            'percentage' => 10,
        ]);
    }
}