<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentMatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_a',
        'team_b',
        'tournament_id',
        'won_team',
    ];
}
