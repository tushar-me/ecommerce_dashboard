<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function user() :BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function updatedBy() :BelongsTo 
    {
        return $this->belongsTo(User::class, 'updatedd_by');
    }
    public function category() :BelongsTo
    {
        return  $this->belongsTo(Category::class);
    }

    public function brand() :BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function productImages() :HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function productExtraDetails() :HasMany
    {
        return $this->hasMany(ProductExtraDetail::class, 'extra_detail_id');
    }
}
