<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingDiskon extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'description', 'is_active'];
}
