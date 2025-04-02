<?php

namespace App\Http\Controllers;
use App\Http\Requests\FeedbackRequest;
use App\Mail\AdminFeedbackMail;
use App\Mail\UserFeedbackMail;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
  public function index(){
    $feedback = Feedback::orderBy('id','desc')->paginate(5);
    // dd($feedback);
    return view('backend.feedback',compact('feedback'));
  }

  //-------------- INSERT FEEDBACK QUERY -----------------//
public function store(FeedbackRequest $request){

   $feedbackData =  Feedback::create($request->all());
   
  if($feedbackData){
      Mail::to('vishalsharmagajrahi@gmail.com')->send(new AdminFeedbackMail($feedbackData));
      Mail::to($request->email)->send(new UserFeedbackMail($feedbackData));
  }


    return redirect()->back()->with('success','your feedback is completed...!');
}

// ----------------- DELETE FEEDBACK QUERY --------------//
public function delete(string $id){
    $feedback = Feedback::find($id);
    $feedback->delete();

    return redirect()->route('feedback.index')->with('success','Your feedback form has been successfully submitted...!');

}


}
