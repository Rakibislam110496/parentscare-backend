<?php

namespace App\Mail\Admin;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderBooking extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $orderable = $this->order->orderable;

        return $this->to("parentscare.xyz@gmail.com")->markdown('emails.orders.admin.booked',[
            'username' => $this->order->orderable->user->name,
            'serviceName' => getServiceName($orderable),
            'patientName' => $orderable->patient_name ?? "N/A",
            'phone' => $orderable->phone ?? $orderable->user->phone,
            'amount' => $this->order->amount,
            'sickness' => $orderable->sickness_details ?? "N/A",
            'address' => $orderable->patient_address ?? "N/A",
            'expectedDate' => $orderable->expected_date ? Carbon::parse($orderable->expected_date)->diffForHumans() : "N/A",
            'paymentStatus' => $this->order->status == 'Processing'
        ]);
    }
}
