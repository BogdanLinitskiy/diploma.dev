<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    public function getRouteKeyName()
    {
        return 'alias';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
