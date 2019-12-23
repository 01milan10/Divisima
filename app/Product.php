<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'product_name', 'product_seller','category_id','categories_name',
    ];

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }

    public function attributes(){
        return $this->hasMany('App\Attribute','product_SKU');
    }
}
