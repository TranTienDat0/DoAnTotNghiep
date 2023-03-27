<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Authenticatable;

class Shipping extends BaseModel implements Authenticatable
{
    use AuthenticatableContract;

    protected $table = 'shipping';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email_address',
        'phone',
        'address',
        'note',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $dates = [     
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
