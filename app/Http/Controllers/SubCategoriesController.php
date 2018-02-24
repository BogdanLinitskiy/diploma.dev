<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Test;
use App\Sub_category;
use Illuminate\Http\Request;


class SubCategoriesController extends Controller
{
    public function show(Category $category,Sub_category $sub_category)
    {
        return view('posts.index',compact('sub_category'));
    }

}