<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login(){
        return view('frontend.login');
    }

    public function store(Request $request){
        // dd($request->all());

        $request->validate([
            'email' =>'required|email',
            'password' =>'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if($user && Hash::check($request->password , $user->password)){
            (Auth::login($user));
            return redirect()->route('admin.dashbord')->with('success','SuccessFully login');   
        } else{
            return back()->with('error' , 'Invailid Credentials ...!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('varranty');
    }
}
