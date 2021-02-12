<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Blog;

class ContactController extends Controller
{

    public function getContactPage(){
        return view('cundysmithpub.contact');
    }


    public function SubmitContactUs(Request $req){
    
        if ((!empty($req->name))&&(!empty($req->email))&&(!empty($req->message))) {
        $blog = Blog::first();
        $data = ['sendername'=>$req->name,'senderemail'=>$req->email,'message'=>$req->message];
        $valuedata = json_decode(json_encode($data)); 
        $blog->data = $valuedata;
        $receiver = ['email'=>'nwoyeogeemilia@gmail.com'];
        $valuereceive = json_decode(json_encode($receiver));
        

        Mail::to($valuereceive)->send(new ContactMail($blog));
            
        } else {
            return redirect('/contact')->with('statusempty', 'Please Fill All Fields!!!!');
            
        }
        

    }
}
