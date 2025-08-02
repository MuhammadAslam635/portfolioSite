<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $fillable = ['name', 'slug', 'image', 'is_active','sType'];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_skills')
            ->withPivot('level', 'is_active', 'score')
            ->withTimestamps();
    }
}
