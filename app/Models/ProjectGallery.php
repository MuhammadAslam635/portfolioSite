<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    protected $fillable = [
        'project_id',
        'image',
        'is_active',
        'caption',
        'content',
        'is_featured',
        'order',
    ];

    /**
     * Get the project associated with the gallery.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the image URL for the gallery.
     */
    public function getImageUrlAttribute()
    {
        return asset('assets/projects/galleries/' . $this->image);
    }

    /**
     * Scope a query to only include active galleries.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    /**
     * Scope a query to only include inactive galleries.
     */
    public function scopeInactive($query)
    {
        return $query->where('is_active', 0);
    }

    /**
     * Scope a query to search galleries by caption or content.
     */
    public function scopeSearch($query, $searchTerm)
    {
        return $query->where('caption', 'like', '%' . $searchTerm . '%')
                     ->orWhere('content', 'like', '%' . $searchTerm . '%');
    }

    /**
     * Scope a query to order galleries by order.
     */
    public function scopeOrderByOrder($query, $direction = 'asc')
    {
        return $query->orderBy('order', $direction);
    }
    /**
     * Scope a query to only include featured galleries.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', 1);
    }
    /**
     * Scope a query to only include non-featured galleries.
     */
    public function scopeNonFeatured($query)
    {
        return $query->where('is_featured', 0);
    }
}
