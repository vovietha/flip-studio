<?php

namespace App\Models;

use App\Models\Catalog;
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

}
