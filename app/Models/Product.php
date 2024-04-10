<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['code', 'title', 'price', 'count','category_id', 'subcategory_id', 'brand_id', 'short',
'charac', 'image', 'type', 'camera', 'height', 'weight', 'color', 'color2', 'color3', 'imagecolor1', 'imagecolor2', 'imagecolor3',
        'imagedescr1', 'imagedescr2', 'imagedescr3', 'imagedescr4', 'imagedescr5', 'imagedescr6', 'imagedescr7', 'descr1', 'descr2',
        'descr3', 'descr4', 'descr5', 'descr6', 'descr7', 'imgvant1', 'imgvant2', 'imgvant3', 'imgvant4',
        'vantdescr', 'vantdescr2', 'vantdescr3', 'vantdescr4'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'images');
    }

    public function scopeByCode($query, $code){
        return $query->where('code', $code);
    }

    public function isAvailable(){
        return $this->count > 0;
    }

    public function getPriceForCount(){
        if(!is_null($this->pivot)){
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

}
