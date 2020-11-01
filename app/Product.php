<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'image',
      'code',
      'name',
      'category',
      'status'
    ];
    protected $table = 'products';
}
