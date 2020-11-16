<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
      'purchase_status',
      'warehouse',
      'purchase_account',
      'name',
      'email',
      'phone',
      'address',
      'date',
      'p_code',
      'p_name',
      'p_price',
      'p_quantity',
      'ban',
      'packing',
      'belt',
      'labour',
      'transport',
      'amount',
      'commission',
      'after_commission_amount',
      'due',
      'total_amount'
    ];
    protected $table = 'purchases';
}
