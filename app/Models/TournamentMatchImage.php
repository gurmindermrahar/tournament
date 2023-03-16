<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentMatchImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_match_id',
        'tournament_id',
        'team_id',
        'image',
        'upload_by',
    ];
}
