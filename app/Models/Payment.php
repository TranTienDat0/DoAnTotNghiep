<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Authenticatable;

class Payment extends BaseModel implements Authenticatable
{
    use AuthenticatableContract;

    protected $fillable = [
        'method',
        'status',
        'shipping_id',
        'order_id',
    ];
}
