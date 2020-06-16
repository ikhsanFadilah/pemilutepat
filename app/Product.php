<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $fillable = [
    'title',
    'fitur',
    'slug',
    'price',
    'priceup',
    'unit',
    'url',
    'description',
    'status'
  ];
  protected $hidden = ['created_at', 'updated_at'];
}
