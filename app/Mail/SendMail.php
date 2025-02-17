<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       /* return $this->from('lucifermisterartur@gmail.com')->subject('Talab va Takliflar')->view('dynamic_email_template')->with('data', $this->data);*/
        return $this->from('infouptrz@gmail.com')->subject('Murojaatnoma, talab yoki takliflar')->view('email_template')->with('data',$this->data);
    }
}
