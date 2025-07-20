<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model
{
    //
    protected $fillable = [
        'project_id',
        'team_id',
        'role',
    ];
    /**
     * Get the project associated with the team.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    /**
     * Get the team associated with the project.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    /**
     * Scope a query to search project teams by project name or team name.
     */
    public function scopeSearch($query, $searchTerm)
    {
        return $query->whereHas('project', function ($q) use ($searchTerm) {
            $q->where('name', 'like', '%' . $searchTerm . '%')
              ->orWhere('slug', 'like', '%' . $searchTerm . '%');
        })->orWhereHas('team', function ($q) use ($searchTerm) {
            $q->where('name', 'like', '%' . $searchTerm . '%')
              ->orWhere('slug', 'like', '%' . $searchTerm . '%');
        });
    }
    /**
     * Scope a query to order project teams by project name.
     */
    public function scopeOrderByProjectName($query, $direction = 'asc')
    {
        return $query->join('projects', 'project_teams.project_id', '=', 'projects.id')
                     ->orderBy('projects.name', $direction)
                     ->select('project_teams.*');
    }
    /**
     * Scope a query to order project teams by team name.
     */
    public function scopeOrderByTeamName($query, $direction = 'asc')
    {
        return $query->join('teams', 'project_teams.team_id', '=', 'teams.id')
                     ->orderBy('teams.name', $direction)
                     ->select('project_teams.*');
    }
    /**
     * Scope a query to filter project teams by role.
     */
    public function scopeFilterByRole($query, $role)
    {
        return $query->where('role', $role);
    }
    /**
     * Scope a query to only include active project teams.
     */
    public function scopeActive($query)
    {
        return $query->whereHas('project', function ($q) {
            $q->where('is_active', 1);
        })->whereHas('team', function ($q) {
            $q->where('is_active', 1);
        });
    }
}
