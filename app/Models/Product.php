<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'category_id'];
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function discount(): MorphOne {
        return $this->morphOne(Discount::class, 'discountable');
    }
}
