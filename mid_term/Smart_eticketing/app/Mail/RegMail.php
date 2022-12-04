<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public $userType;   
    public $username;   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userType,$username)
    {
        //
        
        $this->userType = $userType;   
        $this->username = $username;    
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Successfully registered in largest online ticket website', 
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    // public function content()
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
    public function build()
    {
        return $this->view('mails.RegMail')
        ->with('userType',$this->userType)
        ->with('username',$this->username);
    }
}
