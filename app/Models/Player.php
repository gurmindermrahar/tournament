<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'bio',
        'country',
        'age',
        'total_games',
        'wins',
        'loses',
        'image',
        'facebook_url',
        'twitter_url',
        'twitch_url',
        'youtube_url',
        'gears',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
