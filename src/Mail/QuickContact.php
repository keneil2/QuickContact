<?php

namespace QuickContact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuickContact extends Mailable
{
    use Queueable, SerializesModels;
  
    /**
     * Create a new message instance.
     */
    public function __construct(private $reply,private $user )
    {
        $this->reply=$reply;
        $this->user=$user;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Quick Contact',
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'form::email',
    //         with:[
    //             "reply"=>$this->reply,
    //             "name"=>$this->user
    //         ]
    //     );
    // }

    public function build(){
   return $this->view('form::email',[
                "reply"=>$this->reply,
                "name"=>$this->user
   ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
