<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class, 'CategId');
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class, 'BrandId');
    }

           /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Name', 'Price', 'CategId', 'BrandId'];
}
