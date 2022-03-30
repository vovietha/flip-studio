<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'id',
        'username',
        'email',
        'created_at',
        'updated_at',
    ];
}
