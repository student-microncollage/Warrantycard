<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\UserRegister;
use Illuminate\Http\Request;

class UserRegisterController extends Controller
{

  public function index(){
    return view('backend.userregister');
  }

  public function userregister(){
    return view('backend.add_userregister');
  }

  public function store(UserRegisterRequest $request){

    UserRegister::create($request->all());


    return redirect()->route('userregister.index')->with('succes','Item Added Successfully...!');
  }


}
