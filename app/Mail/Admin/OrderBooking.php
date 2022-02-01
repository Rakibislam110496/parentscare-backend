<?php

namespace App\Mail\Admin;

use App\Models\DoctorAppointment;
use App\Models\NurseAppointment;
use App\Models\PatientGuideAppointment;
use App\Models\TherapistAppointment;
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

        $with = [
            'Service Name' => getServiceName($orderable),
        ];
        if(get_class($orderable) == DoctorAppointment::class){
            $with = array_merge($with, ['Doctor Name' => $orderable->doctor->name, 'Doctor Department' => $orderable->doctor->department->name]);
        }
        if(get_class($orderable) == NurseAppointment::class){
            $with = array_merge($with, ['Nurse Name' => $orderable->nurse->name, 'Nurse Category' => $orderable->nurse->is_special ? "Special" : "Regular"]);
        }
        if(get_class($orderable) == PatientGuideAppointment::class){
            $with = array_merge($with, ['Patient Guide Name' => $orderable->patientGuide->name]);
        }
        if(get_class($orderable) == TherapistAppointment::class){
            $with = array_merge($with, ['Therapist Name' => $orderable->therapist->name]);
        }

        $with = array_merge($with, [
            'User Name' => $this->order->orderable->user->name,
            'Patient Name' => $orderable->patient_name ?? "N/A",
            'Phone' => $orderable->phone ?? $orderable->user->phone,
            'Amount' => $this->order->amount,
            'Sickness' => $orderable->sickness_details ?? "N/A",
            'Address' => $orderable->patient_address ?? "N/A",
            'Expected Date' => $orderable->expected_date ? Carbon::parse($orderable->expected_date)->diffForHumans() : "N/A",
            'Payment Status' => $this->order->status == 'Processing' ? "Paid" : "Not Paid"
        ]);

        return $this->to("parentscare.xyz@gmail.com")->markdown('emails.orders.admin.booked',["data" => $with]);
    }
}
