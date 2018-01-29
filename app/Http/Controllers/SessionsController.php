<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        if(!auth()->attempt(request(['email','password']))){
            return back()->withErrors([
                'message' => 'Пожалуйста проверьте правильность введенного пароля и email'
            ]);
        }
        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
