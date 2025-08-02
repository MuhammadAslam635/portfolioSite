<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //

    protected $fillable = [
        'name',
        'slug',
        'image',
        'is_active',
        'designation',
        'content',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube',
        'whatsapp',
        'github',
        'phone',
        'email',
    ];
    /**
     * Get the image URL for the team.
     */
    public function getImageUrlAttribute()
    {
        return asset('assets/teams/' . $this->image);
    }
    /**
     * Scope a query to only include active teams.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    /**
     * Scope a query to only include inactive teams.
     */
    public function scopeInactive($query)
    {
        return $query->where('is_active', 0);
    }
    /**
     * Scope a query to search teams by name or designation.
     */
    public function scopeSearch($query, $searchTerm)
    {
        return $query->where('name', 'like', '%' . $searchTerm . '%')
                     ->orWhere('designation', 'like', '%' . $searchTerm . '%');
    }
    /**
     * Scope a query to order teams by name.
     */
    public function scopeOrderByName($query, $direction = 'asc')
    {
        return $query->orderBy('name', $direction);
    }
    /**
     * Scope a query to order teams by designation.
     */
    public function scopeOrderByDesignation($query, $direction = 'asc')
    {
        return $query->orderBy('designation', $direction);
    }
    /**
     * Scope a query to only include teams with a specific designation.
     */
    public function scopeWithDesignation($query, $designation)
    {
        return $query->where('designation', $designation);
    }
    /**
     * Scope a query to only include teams with a specific social media link.
     */
    public function scopeWithSocialMedia($query, $platform, $link)
    {
        return $query->where($platform, 'like', '%' . $link . '%');
    }
    /**
     * Scope a query to only include teams with a specific phone number.
     */
    public function scopeWithPhone($query, $phone)
    {
        return $query->where('phone', 'like', '%' . $phone . '%');
    }
    /**
     * Scope a query to only include teams with a specific email.
     */
    public function scopeWithEmail($query, $email)
    {
        return $query->where('email', 'like', '%' . $email . '%');
    }
    /**
     * Scope a query to only include teams with a specific slug.
     */
    public function scopeWithSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_teams', 'team_id', 'project_id')
                    ->withPivot('role')
                    ->withTimestamps();
    }
    /**
     * Scope a query to filter teams by project.
     */
    public function scopeFilterByProject($query, $projectId)
    {
        return $query->whereHas('projects', function ($q) use ($projectId) {
            $q->where('project_id', $projectId);
        });
    }
    /**
     * Scope a query to filter teams by role in the project.
     */
    public function scopeFilterByRole($query, $role)
    {
        return $query->whereHas('projects', function ($q) use ($role) {
            $q->wherePivot('role', $role);
        });
    }
    /**
     * Scope a query to order teams by project name.
     */
    public function scopeOrderByProjectName($query, $direction = 'asc')
    {
        return $query->join('project_teams', 'teams.id', '=', 'project_teams.team_id')
                     ->join('projects', 'project_teams.project_id', '=', 'projects.id')
                     ->orderBy('projects.name', $direction)
                     ->select('teams.*');
    }
    /**
     * Scope a query to order teams by project role.
     */
    public function scopeOrderByProjectRole($query, $direction = 'asc')
    {
        return $query->join('project_teams', 'teams.id', '=', 'project_teams.team_id')
                     ->orderBy('project_teams.role', $direction)
                     ->select('teams.*');
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'team_skills')
            ->withPivot('level', 'is_active', 'score')
            ->withTimestamps();
    }
}
