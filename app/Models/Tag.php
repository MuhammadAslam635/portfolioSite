<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'is_active',
    ];
    /**
     * Get the blogs associated with the tag.
     */
    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_tags', 'tag_id', 'blog_id');
    }
    /**
     * Get the image URL for the tag.
     */
    public function getImageUrlAttribute()
    {
        return asset('assets/tags/' . $this->image);
    }
    /**
     * Scope a query to only include active tags.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    /**
     * Scope a query to only include inactive tags.
     */
    public function scopeInactive($query)
    {
        return $query->where('is_active', 0);
    }
    /**
     * Scope a query to search tags by name.
     */
    public function scopeSearch($query, $searchTerm)
    {
        return $query->where('name', 'like', '%' . $searchTerm . '%')
                     ->orWhere('slug', 'like', '%' . $searchTerm . '%');
    }
    /**
     * Scope a query to order tags by name.
     */
    public function scopeOrderByName($query, $direction = 'asc')
    {
        return $query->orderBy('name', $direction);
    }
}
