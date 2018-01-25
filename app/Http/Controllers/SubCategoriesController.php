<?php

namespace App\Http\Controllers;

use App\Sub_category;
use Illuminate\Http\Request;


class SubCategoriesController extends Controller
{
    public function show($name,$sub){
        switch($name){
            case 'IT':
                switch($sub){
                    case 'web-programming':
                        $data['IT'] = Sub_category::all();
                        return view('sub_categories.IT',$data);
                }
        }
    }

}