<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['code', 'title', 'description'];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
