<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Category;

class ProductCodeService
{
    public function generateCode($categoryId, $productName)
    {
        $category = Category::findOrFail($categoryId);
        $categoryCode = strtoupper(substr($category->code, 0, 3));
        $productCode = strtoupper(substr(preg_replace('/[^A-Za-z0-9]/', '', $productName), 0, 3));
        
        $lastProduct = Product::where('code_barang', 'like', "{$categoryCode}{$productCode}%")
            ->orderBy('code_barang', 'desc')
            ->first();
            
        $sequence = 1;
        if ($lastProduct) {
            $lastSequence = intval(substr($lastProduct->code_barang, -3));
            $sequence = $lastSequence + 1;
        }
        
        return $categoryCode . $productCode . str_pad($sequence, 3, '0', STR_PAD_LEFT);
    }
}