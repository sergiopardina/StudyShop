<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = 'prices';

    /**
     * Definition of relations of Product and Price models: One To One (Inverse)
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
