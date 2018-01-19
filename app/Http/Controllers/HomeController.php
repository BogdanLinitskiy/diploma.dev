<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data['categories'] = Category::all();
        return view('main',$data);
    }

}
