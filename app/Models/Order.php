<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',

        'product_id',

        'email',
        'name',
        'phone',

        'country',
        'state',
        'city',
        'zip_code',
        'address_line',


        'payment_screenshot',


        'quantity',
        'price',
        'total_price',

        'status',

        'payment_status',

    ];

    protected $casts = [
        'ordered_at' => 'datetime',
    ];


    public function product()
    {

        return $this->belongsTo(Product::class);
    }
}
