<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Authenticatable;

class Order_Detail extends BaseModel implements Authenticatable
{
    use AuthenticatableContract;

    protected $fillable = [
        'product_name',
        'price',
        'quantity',
        'products_id',
        'order_id',
    ];
}
