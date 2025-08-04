<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'user_id',
        'image',
        'is_active',
        'category_id',
        'published_at',
        'is_featured',
        'views',
        'likes',
        'comments_count',
        'shares_count',
        'reading_time',
    ];
    /**
     * Get the category associated with the blog.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get the tags associated with the blog.
     */
    public function tags()
    {
        return $this->hasMany(BlogTag::class);
    }
    /**
     * Get the author of the blog.
     */
    public function author()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }
    /**
     * Get the image URL for the blog.
     */
    public function getImageUrlAttribute()
    {
        return asset('assets/blogs/' . $this->image);
    }
    /**
     * Scope a query to only include published blogs.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', 1)
                     ->where('published_at', '<=', now());
    }
    /**
     * Scope a query to only include featured blogs.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', 1);
    }
    /**
     * Scope a query to search blogs by name or slug.
     */
    public function scopeSearch($query, $searchTerm)
    {
        return $query->where('name', 'like', '%' . $searchTerm . '%')
                     ->orWhere('slug', 'like', '%' . $searchTerm . '%');
    }
    /**
     * Scope a query to order blogs by name.
     */
    public function scopeOrderByName($query, $direction = 'asc')
    {
        return $query->orderBy('name', $direction);
    }
    /**
     * Scope a query to order blogs by published date.
     */
    public function scopeOrderByPublishedDate($query, $direction = 'desc')
    {
        return $query->orderBy('published_at', $direction);
    }
    /**
     * Scope a query to filter blogs by category.
     */
    public function scopeFilterByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }
    /**
     * Scope a query to filter blogs by tag.
     */
    public function scopeFilterByTag($query, $tagId)
    {
        return $query->whereHas('tags', function ($q) use ($tagId) {
            $q->where('tag_id', $tagId);
        });
    }
    /**
     * Scope a query to filter blogs by author.
     */
    public function scopeFilterByAuthor($query, $authorId)
    {
        return $query->where('user_id', $authorId);
    }
    /**
     * Scope a query to filter blogs by publication status.
     */
    public function scopeFilterByPublicationStatus($query, $status)
    {
        return $query->where('is_published', $status);
    }
    /**
     * Scope a query to filter blogs by featured status.
     */
    public function scopeFilterByFeaturedStatus($query, $status)
    {
        return $query->where('is_featured', $status);
    }
    /**
     * Scope a query to filter blogs by date range.
     */
    public function scopeFilterByDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('published_at', [$startDate, $endDate]);
    }
    /**
     * Scope a query to filter blogs by view count.
     */
    public function scopeFilterByViews($query, $minViews, $maxViews)
    {
        return $query->whereBetween('views', [$minViews, $maxViews]);
    }
    /**
     * Scope a query to filter blogs by likes.
     */
    public function scopeFilterByLikes($query, $minLikes, $maxLikes)
    {
        return $query->whereBetween('likes', [$minLikes, $maxLikes]);
    }
    /**
     * Scope a query to filter blogs by comments count.
     */
    public function scopeFilterByCommentsCount($query, $minComments, $maxComments)
    {
        return $query->whereBetween('comments_count', [$minComments, $maxComments]);
    }
    /**
     * Scope a query to filter blogs by shares count.
     */
    public function scopeFilterBySharesCount($query, $minShares, $maxShares)
    {
        return $query->whereBetween('shares_count', [$minShares, $maxShares]);
    }
    /**
     * Scope a query to filter blogs by reading time.
     */
    public function scopeFilterByReadingTime($query, $minTime, $maxTime)
    {
        return $query->whereBetween('reading_time', [$minTime, $maxTime]);
    }
    public function blogGalleries(){
        return $this->hasMany(BlogGallery::class);
    }
    public function blogComments()
    {
        return $this->hasMany(BlogComment::class);
    }
}
