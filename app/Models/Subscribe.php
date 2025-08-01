<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    //
    protected $fillable = [
        'email',
        'is_active',
        'is_verified',
    ];
}
