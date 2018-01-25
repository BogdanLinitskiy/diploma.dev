<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//    protected $table = 'categories';

//    public function getRouteKeyName()
//    {
//        return 'alias';
//    }
    public function sub_categories(){
        return $this->hasMany(Sub_category::class,'category_id','id');
    }
}
