<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function creator() :BelongsTo
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function updatedBy() :BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    public function category() :BelongsTo
    {
        return  $this->belongsTo(Category::class);
    }

    public function brand() :BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function images() :HasMany
    {
        return $this->hasMany(ProductImage::class);
    }
}
