<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'game',
        'game_mode',
        'match_type',
        'max_teams',
        'play_per_team',
        'max_players',
        'credit_entry',
        'platform',
        'type',
        'cash_prize',
        'region',
        'pixel_esports_profil',
    ];

}
