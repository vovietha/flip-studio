<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    public function scopeRoot($query) {
        $query->whereNull('parent_id');
    }
    public function children($query) {
        return $this->hasMany(Catalog::class,'parent_id');
    }

}
