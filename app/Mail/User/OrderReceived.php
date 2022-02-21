<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderReceived extends Mailable
{
    use Queueable, SerializesModels;

    private $orderable;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderable)
    {
        $this->orderable = $orderable;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->orderable->user->email)->markdown('emails.orders.user.received');
    }
}
