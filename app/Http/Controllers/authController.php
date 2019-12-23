<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Cassandra\Session;

class authController extends Controller
{
    use AuthenticatesUsers;

    public function loginForm(){
        return view('frontend.auth.login_register');
    }

    public function userLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
//        $credentials = $request->only('email','password');
//        Auth::attempt($credentials);
    }

    public function userRegister(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'phone'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
            ]);

        User::create([
           'name'=>$request->input('name'),
           'email'=>$request->input('email'),
           'mob_num'=>$request->input('phone'),
           'password'=>$request->input('password_confirmation'),
           'role'=>"user",
           'password'=> Hash::make($request->input('password_confirmation')),

        ]);
        return redirect('/backend');
    }

    public function userLogout(){
//        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
