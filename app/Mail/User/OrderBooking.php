<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderBooking extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $oderable;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($oderable)
    {
        $this->oderable = $oderable;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->oderable->user->email)->markdown('emails.orders.user.booked');
    }
}
