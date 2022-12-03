<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class signup extends Mailable
{
    use Queueable, SerializesModels;
    public $link;
    public $usr;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($link,$usr)
    {
        $this->link=$link;
        $this->usr=$usr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail');
    }

}
