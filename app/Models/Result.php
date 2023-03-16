<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'tournament',
        'teams',
        'player',
        'team_a_point',
        'team_b_point',
        'remarks',
        'status',
        
    ];
}
