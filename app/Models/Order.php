<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'product_name',
        'price',
        'payment_method',
        'payment_status',
        'payment_transaction_id',
    ];
}
