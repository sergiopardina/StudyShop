<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';

    /**
     * Definition of relations of Photo and Product models: Many To One (Inverse)
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
