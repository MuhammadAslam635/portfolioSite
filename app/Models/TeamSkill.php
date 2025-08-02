<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamSkill extends Model
{
    //
    protected $fillable = ['team_id', 'skill_id', 'level', 'is_active', 'score'];
    protected $casts = [
        'is_active' => 'boolean',
        'score' => 'integer',
    ];
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
