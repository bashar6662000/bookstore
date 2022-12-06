<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;

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
        return $this->view('mail.mail');
    }

/**
 * Get the message envelope.
 *
 * @return \Illuminate\Mail\Mailables\Envelope
 */
public function envelope()
{
    return new Envelope(
         new Address('jeffrey@example.com', 'Jeffrey Way'),
         'Order Shipped',
    );
}
}
