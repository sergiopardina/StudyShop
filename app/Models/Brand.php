<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    /**
     * Definition of relations of Brand and Product models: One To Many
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
