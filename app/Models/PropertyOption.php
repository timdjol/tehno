<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyOption extends Model
{
    use SoftDeletes;

    protected $fillable = ['property_id', 'title', 'color'];

    public function property(){
        return $this->belongsTo(Property::class);
    }

    //TODO: check table name and fields
    public function skus(){
        return $this->belongsToMany(Sku::class);
    }

}
