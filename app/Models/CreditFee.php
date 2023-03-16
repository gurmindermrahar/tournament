<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'credits',
        'currency',
    ];

}
