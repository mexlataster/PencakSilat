<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PencakSilatMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $address = 'kip.kippeneieren@gmail.com';
      $name = 'Mex Lataster';
      $subject = 'Test';

  return $this->view('emails.pencaksilatmail')
              ->from($address, $name)
              ->cc($address, $name)
              ->bcc($address, $name)
              ->replyTo($address, $name)
              ->subject($subject);
    }
}
