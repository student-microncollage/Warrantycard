<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\UserRegister;
use Illuminate\Http\Request;

class UserRegisterController extends Controller
{

  public function index(){
    $userregister = UserRegister::orderBy('id','desc')->paginate(6); 
    // dd($userregister);
    return view('backend.userregister',compact('userregister'));
  }
//--------------------- INSERT USERE-REGISTER QUERY -------------//
  public function userregister(){
    return view('backend.add_userregister');
  }

  public function store(UserRegisterRequest $request){

    UserRegister::create($request->all());


    return redirect()->route('userregister.index')->with('succes','Item Added Successfully...!');
  }

  //----------------- DELETE USER-REGISTER QUERY ------------//
  public function delete(string $id){
    $userregister = UserRegister::find($id);
    $userregister->delete();
    return redirect()->route('userregister.index')->with('succes','Item deleted Successfully...!');
  }
 //----------------- SHOW USER-REGISTER QUERY ------------//
  public function show(string $id){

    $userregister = UserRegister::find($id);
    return view('backend.showuser',compact('userregister'));

  }


}
