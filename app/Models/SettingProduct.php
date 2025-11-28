<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Unit;
use App\Models\PaymentMethod;

class SettingProduct extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code_barang',
        'description',
        'price',
        'discount',
        'stock',
        'foto_produk',
        'category_id',
        'unit_id',
        'default_payment_id',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'price' => 'decimal:2',
        'discount' => 'decimal:2',
        'stock' => 'integer',
        'is_active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the unit that owns the product.
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    /**
     * Get the default payment method for the product.
     */
    public function defaultPayment()
    {
        return $this->belongsTo(PaymentMethod::class, 'default_payment_id');
    }

    /**
     * Scope a query to only include active products.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include products with discount.
     */
    public function scopeWithDiscount($query)
    {
        return $query->where('discount', '>', 0);
    }

    /**
     * Calculate the discounted price.
     */
    public function getDiscountedPriceAttribute()
    {
        return $this->price - ($this->price * $this->discount / 100);
    }

    /**
     * Check if product is in stock.
     */
    public function getInStockAttribute()
    {
        return $this->stock > 0;
    }

    /**
     * Get the product image URL.
     */
    public function getImageUrlAttribute()
    {
        if ($this->foto_produk) {
            return asset('storage/products/' . $this->foto_produk);
        }
        
        return asset('images/default-product.png');
    }
}