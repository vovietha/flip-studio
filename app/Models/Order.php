<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'fname',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'pincode',
        'status',
        'note',
        'tracking_number',
    ];
}
