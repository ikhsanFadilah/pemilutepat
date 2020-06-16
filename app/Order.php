<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
      'product_id',
      'name',
      'phone',
      'email',
      'address',
      'date',
      'status',
      'reply'
    ];
    protected $hidden = ['created_at', 'updated_at'];

    public function Product()
    {
      return $this->belongsTo('App\Product');
    }
}
