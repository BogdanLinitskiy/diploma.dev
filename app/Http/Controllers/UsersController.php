<?php

namespace App\Http\Controllers;

use App\Seller_profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Seller_profile $seller)
    {
        $ro =Seller_profile::find(Auth::user()->id);
        if($ro->work == NULL){
            return $this->create();
        }
        return view('seller_profile.show',compact('ro'));
    }

    public function create()
    {
        return view('seller_profile.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'work' => 'required',
            'languages' => 'required|min:2|max:100',
            'skills' => 'max:250',
            'education' => 'max:100',
            'desctiption' => 'max:500'
        ]);
        Seller_profile::create(request()->all());
        return redirect('/seller_profile');
    }
}
