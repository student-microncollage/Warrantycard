<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\WarntyMail;
use App\Models\WarentyCard;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Header\MailboxListHeader;

class WarentyCardController extends Controller
{
    public function index(){
        $warentycard = WarentyCard::orderBy('id', 'desc')->Paginate(10);
        // dd($warentycard);
        return view('backend.warentycard',compact('warentycard'));
    }
    //-------------- INSERT WERENTY-CARD QUERY -------------//
    public function warentycard(){
        return view('backend.add_warentycard');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required|min:3|max:255',
            'state' => 'required|min:3|max:255',
            'productsln' => 'required|integer',
            'purchaseform' => 'required|min:3|max:255',
            'purchased' => 'required',
            'expaired' => 'required',
        ]);

     $warentycardData  =  WarentyCard::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'city' =>$request->city,
            'state' =>$request->state,
            'product_sl_no' =>$request->productsln,
            'purchase_form' =>$request->purchaseform,
            'status' => 'pending',
           'warenty_card_no' => Str::random(10),
            'purchase_date' =>$request->purchased,
            'expaire_date' =>$request->expaired,
        ]);
        if ($warentycardData) {
            // $adminemail = 'admin@gmail.com';
              Mail::to('vishalsharmagajrahi@gmail.com')->send(new AdminMail($warentycardData));
                // Mail::to($request->email)->send(new WarntyMail($warentycardData));
        }


        return redirect()->route('warentycard.index')->with('succes','Item Addes SuccessFully...!');
    }

    //-------------------  DELETE WARENTY-CARD QUERY ---------------//
    public function delete(string $id){
        $warentycard = WarentyCard::find($id);
        $warentycard->delete();

        return redirect()->route('warentycard.index')->with('succes','Item deleted SuccessFully...!');
    }


    public function show(string $id){
        $show = WarentyCard::find($id);
        return view('backend.show',compact('show'));
    }

}
