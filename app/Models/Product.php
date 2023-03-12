<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    /**
     * Definition of relations of Category and Product models: One To Many (Inverse)
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Definition of relations of Brand and Product models: One To Many (Inverse)
     * @return BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Definition of relations of Product and Price models: One To One
     * @return HasOne
     */
    public function price()
    {
        return $this->hasOne(Price::class);
    }

    /**
     * Definition of relations of Product and Photo models: One To Many
     * @return HasMany
     */
    public function photo()
    {
        return $this->hasMany(Photo::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
