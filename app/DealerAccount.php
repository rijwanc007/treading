<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DealerAccount extends Model
{
    protected $fillable = [
        'image',
        'name',
        'email',
        'phone',
        'address',
        'due',
        'paid',
        'balance'
    ];
    protected $table = 'dealer_accounts';
}
