<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request){
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            if(Auth::user()->activated){
            session()->flash('success', 'Welcome back!');
            $fallback = route('users.show', Auth::user());
            return redirect()->intended($fallback);
        } else {
            Auth::logout();
            session()->flash('warning', 'Your account not be confirmed, please check email in your email box.');

            return redirect('/');
        }
    }else {
            session()->flash('danger', 'パスワード又はメールアドレスが間違った');
            return redirect()->back()->withInput();
        }      
    }

    public function destroy(){
        Auth::logout();
        session()->flash('success', 'ログアウトしました。');
        return redirect('login');
    }
}
