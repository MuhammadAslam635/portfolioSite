<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'is_active',
    ];

    /**
     * Get the blogs associated with the category.
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    /**
     * Get the image URL for the category.
     */
    public function getImageUrlAttribute()
    {
        return asset('storage/categories/' . $this->image);
    }
}
