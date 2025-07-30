<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    //
    protected $fillable = [
        'blog_id',
        'name',
        'email',
        'comment',
    ];
    /**
     * Get the blog associated with the comment.
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
