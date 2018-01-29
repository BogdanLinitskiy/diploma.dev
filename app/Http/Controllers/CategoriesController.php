<?php

namespace App\Http\Controllers;

use App\Category;
use App\Sub_category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category){
        $data['category'] = Sub_category::all();
        return view("categories.".$category['alias'],$data);
//        return view("categories.".$category['alias'],compact('category'));
    }
}
