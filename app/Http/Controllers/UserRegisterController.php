<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\UserRegister;
use Illuminate\Http\Request;

class UserRegisterController extends Controller
{

  public function index(){
    $userregister = UserRegister::orderBy('id','desc')->paginate(10); 
    // dd($userregister);
    return view('backend.userregister',compact('userregister'));
  }
//--------------------- INSERT USERE-REGISTER QUERY -------------//

  public function store(UserRegisterRequest $request){

    UserRegister::create($request->all());


    return redirect()->back()->with('success','Your inquiry form has been successfully submitted...!');
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
