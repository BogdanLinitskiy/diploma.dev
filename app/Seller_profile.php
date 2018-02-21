<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller_profile extends Model
{
    protected $fillable = ['work','languages','skills','education','description','user_id'];
//    protected $table = 'seller_profiles';

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
