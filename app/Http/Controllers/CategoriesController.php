<?php

namespace App\Http\Controllers;

use App\Category;
use App\Sub_category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category){
        return view("categories.show",compact('category'));
    }
}
