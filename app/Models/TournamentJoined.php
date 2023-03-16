<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentJoined extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'agree_rules',
        'team_id',
        'user_id',
        'tournament_id',

        'deviceos',
        'devicetype',
        'checkedIn',
        'points',
        'participantName',
        'waitlisted',
        'seed',
        'locked',
        'meta',
    ];
}
