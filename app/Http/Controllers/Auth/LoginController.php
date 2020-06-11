<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    use AuthenticatesUsers;


    public function __construct(){
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm(){
        return view ('auth.login');
    }

    public function login(Request $request){
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);
        $email=$request->input('email');
        $password=$request->input('password');

        //Auth::attempt(['email' => $email, 'password' => $password]);
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return view('dashboard');
        }

        return back()
        ->withErrors(['email'=>trans('auth.failed')])
        ->withInput(request(['email']));
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
