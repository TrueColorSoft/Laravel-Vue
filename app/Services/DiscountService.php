<?php
namespace App\Services;

class DiscountService {
    public function applyDiscount($product, $user) {
        $discount = 0;
        
        if ($product->category === 'electronics') {
            $discount += 5; // 5% category discount
        }

        if ($user && $user->is_special) {
            $discount += 10; // Special customer discount
        }

        return number_format($product->price * (1 - $discount / 100), 2, '.', '');
    }
}
