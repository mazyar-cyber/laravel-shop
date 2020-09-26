<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProCat extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(ProCat::class, 'parent_id');
    }

    public function categoryRecursive()
    {
        return $this->category()->with('categoryRecursive');
    }

    public function children()
    {
        return $this->hasMany(ProCat::class,'parent_id');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

}
