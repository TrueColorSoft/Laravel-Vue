<?php
namespace App\Services;

use App\Models\Product;
use App\Models\User;

class DiscountService {
    public function applyDiscount(Product $product, ?User $user) {
        $discount = 0;

        // Product discount
        if ($product->discount) {
            $discount += $product->discount->percentage;
        }

        // Category discount
        if ($product->category && $product->category->discount) {
            $discount = max($discount, $product->category->discount->percentage);
        }
        
        // User discount (overrides everything if present)
        if ($user && $user->discount) {
            $discount = max($discount, $user->discount->percentage);
        }

        return number_format($product->price * (1 - $discount / 100), 2, '.', '');
    }
}
