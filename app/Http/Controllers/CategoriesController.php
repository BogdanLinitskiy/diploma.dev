<?php

namespace App\Http\Controllers;

use App\SubIT;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show($name){
        switch ($name){
            case 'IT':
                $data['IT'] = SubIT::all();
                return view('IT.show',$data);
            break;
            case 'Marketing':
                $data['marketing'] = SubIT::all();
                return view('marketing.show',$data);
            break;
            case 'VideoNAnimation':
                $data['videoAnimation'] = SubIT::all();
                return view('video_and_animation.show',$data);
                break;
            case 'Design':
                $data['design'] = SubIT::all();
                return view('design.show',$data);
                break;
            case 'FunNLifestyle':
                $data['funLifestyle'] = SubIT::all();
                return view('fun_and_lifestyle.show',$data);
                break;
            case 'Business':
                $data['business'] = SubIT::all();
                return view('business.show',$data);
                break;
        }
    }
}
