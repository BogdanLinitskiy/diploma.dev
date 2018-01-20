<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category($name){
        switch ($name){
            case 'IT':
                return view('IT.show');
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
