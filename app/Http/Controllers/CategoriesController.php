<?php

namespace App\Http\Controllers;

use App\Category;
use App\Sub_category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show($name){
        switch ($name){
            case 'IT':
                $data['IT'] = Sub_category::all();
                return view('categories.IT',$data);
            break;
            case 'marketing':
                $data['marketing'] = Sub_category::all();
                return view('categories.marketing',$data);
            break;
            case 'videoNAnimation':
                $data['videoAnimation'] = Sub_category::all();
                return view('categories.videoAnimation',$data);
                break;
            case 'design':
                $data['design'] = Sub_category::all();
                return view('categories.design',$data);
                break;
            case 'funNLifestyle':
                $data['funLifestyle'] = Sub_category::all();
                return view('categories.funLifestyle',$data);
                break;
            case 'business':
                $data['business'] = Sub_category::all();
                return view('categories.business',$data);
                break;
        }
    }
}
