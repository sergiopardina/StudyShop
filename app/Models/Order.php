<?php

namespace App\Models;

use App\Models\Product;

class Order
{
    public function products()
    {
        return $this->hasMany(Product::class)->withPivot('quantity');
    }
}
