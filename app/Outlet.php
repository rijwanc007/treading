<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $fillable = [
      'name',
      'phone',
      'address',
      'status',
    ];
    protected $table = 'outlets';
}
