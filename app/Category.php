<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'category_name','parent_id','parent_name'
    ];

    public function subcategory(){
        return $this->hasMany('App\Category', 'parent_id');
    }
}
