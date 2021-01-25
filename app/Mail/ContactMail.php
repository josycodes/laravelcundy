<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Blog;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Blog $blog)
    {
        $this->value = $blog;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // $data = ['sendername'=>$req->name,'senderemail'=>$req->email,'message'=>$req->message] ; 
        return $this->view('emails.emailContact')->with(['senderName'=>$this->value->data]);
    }
}
