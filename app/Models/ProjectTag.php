<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model
{
    protected $fillable = [
        'project_id',
        'tag_id',
    ];

    /**
     * Get the project associated with the tag.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the tag associated with the project.
     */
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    /**
     * Scope a query to search project tags by project name or tag name.
     */
    public function scopeSearch($query, $searchTerm)
    {
        return $query->whereHas('project', function ($q) use ($searchTerm) {
            $q->where('name', 'like', '%' . $searchTerm . '%')
              ->orWhere('slug', 'like', '%' . $searchTerm . '%');
        })->orWhereHas('tag', function ($q) use ($searchTerm) {
            $q->where('name', 'like', '%' . $searchTerm . '%')
              ->orWhere('slug', 'like', '%' . $searchTerm . '%');
        });
    }
    /**
     * Scope a query to order project tags by project name.
     */
    public function scopeOrderByProjectName($query, $direction = 'asc')
    {
        return $query->join('projects', 'project_tags.project_id', '=', 'projects.id')
                     ->orderBy('projects.name', $direction)
                     ->select('project_tags.*');
    }
    /**
     * Scope a query to order project tags by tag name.
     */
    public function scopeOrderByTagName($query, $direction = 'asc')
    {
        return $query->join('tags', 'project_tags.tag_id', '=', 'tags.id')
                     ->orderBy('tags.name', $direction)
                     ->select('project_tags.*');
    }
    /**
     * Scope a query to only include active project tags.
     */
    public function scopeActive($query)
    {
        return $query->whereHas('project', function ($q) {
            $q->where('is_active', 1);
        })->whereHas('tag', function ($q) {
            $q->where('is_active', 1);
        });
    }
    /**
     * Scope a query to only include inactive project tags.
     */
    public function scopeInactive($query)
    {
        return $query->whereHas('project', function ($q) {
            $q->where('is_active', 0);
        })->orWhereHas('tag', function ($q) {
            $q->where('is_active', 0);
        });
    }
    /**
     * Scope a query to only include project tags with a specific project.
     */
    public function scopeProject($query, $projectId)
    {
        return $query->where('project_id', $projectId);
    }
    /**
     * Scope a query to only include project tags with a specific tag.
     */
    public function scopeTag($query, $tagId)
    {
        return $query->where('tag_id', $tagId);
    }
    /**
     * Scope a query to only include project tags with a specific project and tag.
     */
    public function scopeProjectAndTag($query, $projectId, $tagId)
    {
        return $query->where('project_id', $projectId)
                     ->where('tag_id', $tagId);
    }
}
