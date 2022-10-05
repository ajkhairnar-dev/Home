<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
       // dd($mailData);
        $this->$mailData =  $mailData;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        dd($this->$mailData);
            // return $this->from('mailer@gocabish.com')->subject('Test Email')->view('invoice',['data'=>$this->mailData]);
    }
}