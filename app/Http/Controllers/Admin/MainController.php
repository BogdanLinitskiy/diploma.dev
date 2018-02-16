<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Sub_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function index()
    {
//        dd(Auth::guard('admin')->user());
        $data['last_added']['categories'] = Category::latest()->limit(3)->get();
        $data['last_added']['sub_categories'] = Sub_category::latest()->limit(3)->get();
//        $data['last_added']['sub_categories'] = Category::latest()->limit(3)->get();
        $data['categories'] = Category::all();
        return view('admin.main',$data);
    }



}
