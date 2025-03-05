<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\DiscountService;
use Illuminate\Http\Request;

class ProductController extends Controller {
    protected $discountService;

    public function __construct(DiscountService $discountService) {
        $this->discountService = $discountService;
    }

    public function index() {
        $products = Product::all();
        return response()->json(['products' => $products]);
    }

    public function show($id) {
        $product = Product::with('category.discount', 'discount')->findOrFail($id);
        $finalPrice = $this->discountService->applyDiscount($product, auth()->user());
        return response()->json(['product' => $product, 'final_price' => $finalPrice]);
    }
}
