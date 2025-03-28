<?php

namespace App\Http\Controllers;

use App\Models\Complain;

use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function index(){
        $complain = Complain::orderBy('id','desc')->paginate(5);
        return view('backend.complain',compact('complain'));
    }

    //---------------- COMPLAIN INSERT QUERY ------------//
    public function complain(){
        return view('backend.add_complain');
    }

    public function store(Request $request){

        $request->validate([
            'name' =>'required|alpha',
            'email' =>'required|email',
            'mobile' =>'required|min:10|max:15',
            'complain_m' =>'required|min:5',
            'warentycard_n' =>'required|alpha_num|unique:complains,warenty_card_no',          
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('image','public');

        Complain::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'mobile'=> $request->mobile,
            'complain_message'=> $request->complain_m,
            'warenty_card_no'=> $request->warentycard_n,
            'image'=> $imagePath,
        ]);

        return redirect()->route('complain.index')->with('succes','Item Added SuccessFully...!');
    }

    //----------------- COMPLAIN DELETED QUERY ----------------//
    public function delete(string $id){
        $complain = Complain::find($id);
        $complain->delete();
        return redirect()->route('complain.index')->with('succes','Item deleted SuccessFully...!');
    }
}

