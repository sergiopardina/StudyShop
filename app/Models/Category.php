<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    /**
     *  Definition of relations of Category and Product models: One To Many
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
