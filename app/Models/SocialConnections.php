<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialConnections extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'provider_name',
        'provider_id',
        'user_name',
        'user_email',
        'token',
        'refreshToken',
    ];
}
