<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reference_id',
        'currency',
        'amount',
        'email_address',
        'payer_id',
        'firstname',
        'lastname',
        'transaction_id',
    ];
}
