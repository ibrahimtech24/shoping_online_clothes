<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'name',
        'description',
        'price',
        'image',
        'discount_percentage',
        'discount_ends_at',
        'is_featured',
        'is_new',
        'is_trending',
        'stock_alert'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_new' => 'boolean',
        'is_trending' => 'boolean',
        'discount_percentage' => 'float',
        'discount_ends_at' => 'datetime',
    ];

    // Calculate the final price after discount
    public function getFinalPriceAttribute()
    {
        if ($this->hasActiveDiscount()) {
            return $this->price - ($this->price * ($this->discount_percentage / 100));
        }
        return $this->price;
    }

    // Check if product has discount
    public function hasDiscount()
    {
        return $this->discount_percentage && $this->discount_percentage > 0;
    }

    // Check if discount is active (has discount and not expired)
    public function hasActiveDiscount()
    {
        if (!$this->hasDiscount()) {
            return false;
        }
        
        // If no end date, discount is always active
        if (!$this->discount_ends_at) {
            return true;
        }
        
        // Check if discount hasn't expired
        return $this->discount_ends_at->isFuture();
    }

    // Get remaining time for discount in seconds
    public function getDiscountRemainingSecondsAttribute()
    {
        if (!$this->discount_ends_at) {
            return 0;
        }
        
        if (!$this->hasActiveDiscount()) {
            return 0;
        }
        
        return max(0, (int) now()->diffInSeconds($this->discount_ends_at, false));
    }

    // Get total stock from all sizes
    public function getTotalStock()
    {
        return $this->productsizes->sum('quantity');
    }

    // Check if stock is low
    public function isLowStock()
    {
        return $this->getTotalStock() <= $this->stock_alert && $this->getTotalStock() > 0;
    }

    // Check if out of stock
    public function isOutOfStock()
    {
        return $this->getTotalStock() <= 0;
    }

    public function scopeFilterBySubcategories($query, $subcategories)
    {
        return $query->when($subcategories, function ($query, $subcategories) {
            $query->whereHas('subcategory', function ($query) use ($subcategories) {
                $query->whereIn('id', $subcategories);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }


    public function productsizes()
    {
        return $this->hasMany(ProductSize::class);
    }

    // Get available colors for this product
    public function getAvailableColorsAttribute()
    {
        return $this->productsizes
            ->whereNotNull('color')
            ->where('quantity', '>', 0)
            ->unique('color_code')
            ->map(function($item) {
                return [
                    'name' => $item->color,
                    'code' => $item->color_code
                ];
            })->values();
    }

    // Get sizes with relationship
    public function sizes()
    {
        return $this->hasManyThrough(Size::class, ProductSize::class, 'product_id', 'id', 'id', 'size_id');
    }
}
