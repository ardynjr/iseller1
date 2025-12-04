<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SettingProduct;

use Illuminate\Database\Eloquent\Model;

class SettingPayment extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['name', 'description', 'is_active'];

    public function products()
    {
        return $this->hasMany(SettingProduct::class, 'default_payment_id');
    }
}
