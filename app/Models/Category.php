<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['code', 'title', 'tag'];
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function subcategory()
    {
        return $this->hasMany(Subcategory::class);
    }

}
