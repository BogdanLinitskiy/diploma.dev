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
                return view('Marketing.show');
            break;
            case 'VideoNAnimation':
                return view('Marketing.show');
                break;
            case 'Design':
                return view('Marketing.show');
                break;
            case 'FunNLifestyle':
                return view('Marketing.show');
                break;
            case 'business':
                return view('Marketing.show');
                break;
        }
    }
}
