<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Authenticatable;

class Payment extends BaseModel implements Authenticatable
{
    use AuthenticatableContract;

    //Method
    public const METHOD_CASH = 0;
    public const METHOD_CARD = 1;
    public const METHOD_ONLINE = 2;

    public static $methods = [
        self::METHOD_CASH => 'Thanh toán bằng tiền mặt',
        self::METHOD_CARD => 'Thanh toán qua thẻ',
        self::METHOD_ONLINE => 'Thanh toán trực tuyến',
    ];

    //Method
    public const STATUS_NO = 0;
    public const STATUS_YES = 1;

    public static $status = [
        self::STATUS_NO => 'Chưa thanh toán',
        self::STATUS_YES => 'Đã thanh toán',
    ];

    protected $table = 'payment';

    protected $fillable = [
        'method',
        'status',
        'shipping_id',
        'order_id',
    ];
}
