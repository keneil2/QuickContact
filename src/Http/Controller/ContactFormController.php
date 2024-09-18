<?php 
namespace QuickContact\Http\Controller;

use App\Http\Controllers\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use QuickContact\Mail\QuickContact;
use QuickContact\Models\ContactSubmission;

class ContactFormController extends BaseController{
 public function create(){
     return view("form::form");
 }
 public function storeContact(Request $request){
  $message=$request->validate([
    "email"=>["required","email"],   
    "subject"=>["required","min:5"],
    "message"=>["required"]
  ]);

  ContactSubmission::create([
    "email"=>$message["email"],
    "subject"=>$message["subject"],
    "message"=>$message["message"]
  ]);
 }
 public function showMessages(){
  $messgaes=ContactSubmission::all();
  
return view("form::messages",[
  "messages"=>$messgaes
]);
 }
 public function ShowMessage(ContactSubmission $contactSubmission){
  return view("form::message",[
    "message"=>$contactSubmission
  ]);
 }

 public function sendEmail($email,Request $request){
  
  $message=$request->validate([
    "name"=>"required|string|min:5",
    "message"=>"required|string|min:10"
  ]);
  Mail::to($email)->send(mailable: new QuickContact($message["message"],$message["name"]));
  return back()->with("success","reply sent successfully");
 }

}