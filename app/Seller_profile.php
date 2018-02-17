<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller_profile extends Model
{
    protected $fillable = ['work','languages','skills','education','description'];
    protected $table = 'seller_profiles';
}
