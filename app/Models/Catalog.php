<?php

namespace App\Models;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catalog extends Model
{
    use HasFactory;

    public function scopeRoot($query) 
    {
        $query->whereNull('parent_id');
    }
    public function children() 
    {
        return $this->hasMany(Catalog::class,'parent_id');
    }

    protected $fillable = ['name'];
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
