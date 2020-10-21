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
        return $this->hasMany(ProCat::class, 'parent_id');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'cat_id');
    }

    public function property()
    {
        return $this->belongsToMany(ProductProperty::class, Cat_property::class,'category_id','property_id');
    }
}
