<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','about','price','order_details','sub_category_id','user_id'];

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function sub_category()
    {
        return $this->belongsTo(Sub_category::class);
    }
}
