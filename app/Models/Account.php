<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'name',
        'principal',
        'apy',
        'is_interest_only',
    ];

    // * RELATIONSHIPS * //
    
}
