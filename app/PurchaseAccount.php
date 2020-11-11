<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseAccount extends Model
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
    protected $table = 'purchase_accounts';
}
