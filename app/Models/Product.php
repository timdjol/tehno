<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['code', 'title', 'category_id', 'brand_id', 'description', 'image'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function skus(){
        return $this->hasMany(Sku::class);
    }

    public function properties(){
        return $this->belongsToMany(Property::class, 'property_product')->withTimestamps();
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'images');
    }

    public function scopeByCode($query, $code){
        return $query->where('code', $code);
    }

}
