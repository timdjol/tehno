<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;

    protected $fillable = ['title'];

    public function propertyOptions(){
        return $this->hasMany(PropertyOption::class);
    }

    //TODO: check table name and fields
    public function products(){
        return $this->belongsToMany(Product::class);
    }

}
