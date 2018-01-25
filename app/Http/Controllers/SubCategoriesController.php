<?php

namespace App\Http\Controllers;

use App\SubIT;
use Illuminate\Http\Request;


class SubCategoriesController extends Controller
{
    public function show($name,$sub){
        switch($name){
            case 'IT':
                switch($sub){
                    case 'web-programming':
                        $data['IT'] = SubIT::all();
                        return view('sub_categories.show',$data);
                }
        }
    }

}