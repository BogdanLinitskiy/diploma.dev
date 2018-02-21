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

    public function index()
    {
        $posts = Seller_profile::where('user_id',Auth::user()->id)->get();
        if(count($posts)<1){
            return $this->create();
        }
        foreach ($posts as $seller){
            if($seller['work'] == NULL){
                return $this->create();
            }
        }
        return view('seller_profile.index',compact('seller'));
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
            'description' => 'max:500'
        ]);
        Seller_profile::create([
            'work' => request('work'),
            'languages' => request('languages'),
            'skills' => request('skills'),
            'education' => request('education'),
            'description' => request('description'),
            'user_id' => Auth::user()->id
        ]);
        return redirect('/seller_profile');
    }

    public function edit(Seller_profile $seller_profile)
    {
        $posts = Seller_profile::where('user_id',Auth::user()->id)->get();
        foreach ($posts as $seller) {
            if ($seller == $seller_profile) {
                return view('seller_profile.edit', compact('seller'));
            }
        }
    }

    public function update(Seller_profile $seller_profile)
    {

        $posts = Seller_profile::where('user_id',Auth::user()->id)->get();

        foreach ($posts as $seller) {
            if ($seller == $seller_profile) {
                $this->validate(request(),[
                    'work' => 'required',
                    'languages' => 'required|min:2|max:100',
                    'skills' => 'max:250',
                    'education' => 'max:100',
                    'desctiption' => 'max:500'
                ]);
                $seller->update(request()->all());
            }
        }
        return redirect('/seller_profile');
    }

    public function delete(Seller_profile $seller_profile)
    {
        return view('seller_profile.delete',compact('seller_profile'));
    }

    public function destroy(Seller_profile $seller_profile)
    {
        $posts = Seller_profile::where('user_id',Auth::user()->id)->get();
        foreach ($posts as $seller) {
            if ($seller == $seller_profile) {
                $seller->delete();
            }
        }
        return redirect('/seller_profile');
    }
}
