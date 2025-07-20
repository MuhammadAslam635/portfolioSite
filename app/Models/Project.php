<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'is_active',
        'category_id',
        'loom_link',
        'link',
        'is_featured',
        'views',
        'likes',
        'comments_count',
        'shares_count',
        'reading_time',
        'published_at'
    ];

    /**
     * Get the image URL for the project.
     */
    public function getImageUrlAttribute()
    {
        return asset('assets/projects/' . $this->image);
    }

    /**
     * Scope a query to only include active projects.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    /**
     * Scope a query to only include inactive projects.
     */
    public function scopeInactive($query)
    {
        return $query->where('is_active', 0);
    }

    /**
     * Scope a query to search projects by name or slug.
     */
    public function scopeSearch($query, $searchTerm)
    {
        return $query->where('name', 'like', '%' . $searchTerm . '%')
                     ->orWhere('slug', 'like', '%' . $searchTerm . '%');
    }

    /**
     * Scope a query to order projects by name.
     */
    public function scopeOrderByName($query, $direction = 'asc')
    {
        return $query->orderBy('name', $direction);
    }
    /**
     * Scope a query to only include featured projects.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', 1);
    }
    /**
     * Scope a query to only include non-featured projects.
     */
    public function scopeNonFeatured($query)
    {
        return $query->where('is_featured', 0);
    }
    /**
     * Scope a query to only include projects with a specific category.
     */
    public function scopeCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }
    /**
     * Scope a query to order projects by published date.
     */
    public function scopeOrderByPublishedDate($query, $direction = 'desc')
    {
        return $query->orderBy('published_at', $direction);
    }
    /**
     * Scope a query to filter projects by category.
     */
    public function scopeFilterByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }
    /**
     * Get the category associated with the project.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    /**
     * Get the author of the project.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
    /**
     * Get the tags associated with the project.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'project_tags', 'project_id', 'tag_id');
    }
    /**
     * Get the loom link for the project.
     */
    public function getLoomLinkAttribute($value)
    {
        return $value ?? null;
    }
    /**
     * Get the link for the project.
     */
    public function getLinkAttribute($value)
    {
        return $value ??  null;
    }
}
