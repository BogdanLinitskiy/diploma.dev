<?php

namespace App\Http\Controllers;

use App\Test;
use App\Sub_category;
use Illuminate\Http\Request;


class SubCategoriesController extends Controller
{
    public function show()
    {
        return view('posts.index');
    }

}