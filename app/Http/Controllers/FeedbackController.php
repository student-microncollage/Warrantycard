<?php

namespace App\Http\Controllers;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;


class FeedbackController extends Controller
{
  public function index(){
    $feedback = Feedback::all();
    // dd($feedback);
    return view('backend.feedback',compact('feedback'));
  }

  //-------------- INSERT FEEDBACK QUERY -----------------//
public function store(FeedbackRequest $request){

    Feedback::create($request->all());

    return redirect()->back()->with('success','your feedback is completed...!');
}

public function delete(string $id){
    $feedback = Feedback::find($id);
    $feedback->delete();

    return redirect()->route('feedback.index')->with('success','Your feedback form has been successfully submitted...!');

}


}
