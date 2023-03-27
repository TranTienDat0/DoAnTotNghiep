<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Authenticatable;

class Products extends BaseModel implements Authenticatable
{
    use AuthenticatableContract;

    protected $fillable = [
        'name',
        'image',
        'price',
        'quantity',
        'categories_id',
    ];

    protected $dates = [
        'date_of_manufacture',
        'expiry',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
