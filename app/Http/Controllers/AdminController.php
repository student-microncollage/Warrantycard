<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\Feedback;
use App\Models\UserRegister;
use App\Models\WarentyCard;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashbord(){
      $complain = Complain::count();
     $warentycard = WarentyCard::count();
     $inquiry = UserRegister::count();
     $feedback = Feedback::count();
    return view('backend.index',compact('complain','warentycard','inquiry','feedback'));
   }
}
