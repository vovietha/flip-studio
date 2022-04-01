<?php

namespace App\Models;

use App\Models\Catalog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'catalog_id',
        'title',
        'description',
        'price',
        'details',
        'thumbnail',
        'sku',
        'stock',
    ];
    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }
    
}
