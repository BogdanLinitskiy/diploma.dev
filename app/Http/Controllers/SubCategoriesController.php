<?php

namespace App\Http\Controllers;

use App\Test;
use App\Sub_category;
use Illuminate\Http\Request;


class SubCategoriesController extends Controller
{
//    public function show($name,$sub){
//        switch($name){
//            case 'IT':
//                switch($sub){
//                    case 'web-programming':
//                        $data['IT'] = Test::all();
//                        return view('IT.web-programming',$data);
//                    break;
//                }
//        }
//    }
//public function show($name,$sub){
//    $data['IT'] = Test::all();//заменить Тест на Контроллер
//    return view("$name.$sub",$data);
//}
public function show(){
    return view('posts.test');
}

}