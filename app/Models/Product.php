<?php

namespace App\Models;

use App\Models\Order;

class Product
{
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
