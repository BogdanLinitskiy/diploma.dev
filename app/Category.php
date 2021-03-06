<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','alias','logo'];

    public function getRouteKeyName()
    {
        return 'alias';
    }
    public function sub_categories(){
        return $this->hasMany(Sub_category::class);
    }
}
