<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'product_name',
        'ingredients',
        'imported_t',
        'status',
    ];
}
