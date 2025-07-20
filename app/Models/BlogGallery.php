<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class BlogGallery extends Model
{
    //

    protected $fillable = [
        'blog_id',
        'image',
        'is_active',
        'caption',
        'content',
        'is_featured',
        'order',
    ];
    /**
     * Get the blog associated with the gallery.
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
    /**
     * Get the image URL for the gallery.
     */
    public function getImageUrlAttribute()
    {
        return asset('assets/blogs/galleries/' . $this->image);
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
    /**
     * Scope a query to order galleries by creation date.
     */
    public function scopeOrderByCreatedAt($query, $direction = 'desc')  
    {
        return $query->orderBy('created_at', $direction);
    }
    /**
     * Scope a query to filter galleries by blog.
     */
    public function scopeFilterByBlog($query, $blogId)
    {
        return $query->where('blog_id', $blogId);
    }
    /**
     * Scope a query to filter galleries by blog and active status.
     */
    public function scopeFilterByBlogAndActive($query, $blogId, $isActive = true)
    {
        return $query->where('blog_id', $blogId)
                     ->where('is_active', $isActive ? 1 : 0);
    }
    /**
     * Scope a query to filter galleries by blog and featured status.
     */
    public function scopeFilterByBlogAndFeatured($query, $blogId, $isFeatured = true)
    {
        return $query->where('blog_id', $blogId)
                     ->where('is_featured', $isFeatured ? 1 : 0);
    }
    /**
     * Scope a query to filter galleries by blog, active status, and featured status.
     */
    public function scopeFilterByBlogAndActiveAndFeatured($query, $blogId, $isActive = true, $isFeatured = true)
    {
        return $query->where('blog_id', $blogId)
                     ->where('is_active', $isActive ? 1 : 0)
                     ->where('is_featured', $isFeatured ? 1 : 0);
    }
    /**
     * Scope a query to filter galleries by blog, active status, and order.
     */
    public function scopeFilterByBlogAndActiveAndOrder($query, $blogId, $isActive = true, $direction = 'asc')
    {
        return $query->where('blog_id', $blogId)
                     ->where('is_active', $isActive ? 1 : 0)
                     ->orderBy('order', $direction);
    }
    /**
     * Scope a query to filter galleries by blog, featured status, and order.
     */
    public function scopeFilterByBlogAndFeaturedAndOrder($query, $blogId, $isFeatured = true, $direction = 'asc')
    {
        return $query->where('blog_id', $blogId)
                     ->where('is_featured', $isFeatured ? 1 : 0)
                     ->orderBy('order', $direction);
    }
    /**
     * Scope a query to filter galleries by blog, active status, featured status, and order.
     */
    public function scopeFilterByBlogAndActiveAndFeaturedAndOrder($query, $blogId, $isActive = true, $isFeatured = true, $direction = 'asc')
    {
        return $query->where('blog_id', $blogId)
                     ->where('is_active', $isActive ? 1 : 0)
                     ->where('is_featured', $isFeatured ? 1 : 0)
                     ->orderBy('order', $direction);
    }
    /**
     * Scope a query to filter galleries by blog, active status, featured status, and creation date.
     */
    public function scopeFilterByBlogAndActiveAndFeaturedAndCreatedAt($query, $blogId, $isActive = true, $isFeatured = true, $direction = 'desc')
    {
        return $query->where('blog_id', $blogId)
                     ->where('is_active', $isActive ? 1 : 0)
                     ->where('is_featured', $isFeatured ? 1 : 0)
                     ->orderBy('created_at', $direction);
    }
    /**
     * Scope a query to filter galleries by blog, active status, featured status, and creation date.
     */
    public function scopeFilterByBlogAndActiveAndFeaturedAndOrderAndCreatedAt($query, $blogId, $isActive = true, $isFeatured = true, $direction = 'asc', $createdAtDirection = 'desc')
    {
        return $query->where('blog_id', $blogId)
                     ->where('is_active', $isActive ? 1 : 0)
                     ->where('is_featured', $isFeatured ? 1 : 0)
                     ->orderBy('order', $direction)
                     ->orderBy('created_at', $createdAtDirection);
    }
    public function getRenderedContentAttribute()
    {
        // Check if content contains HTML tags
        if (strip_tags($this->content) !== $this->content) {
            // Content is HTML, return as-is
            return $this->content;
        } else {
            // Content is Markdown, convert to HTML
            return Str::markdown($this->content);
        }
    }
}
