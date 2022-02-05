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
        $with = [
            'Service Name' => getServiceName($this->orderable),
        ];
        if(get_class($this->orderable) == DoctorAppointment::class){
            $with = array_merge($with, ['Doctor Name' => $this->orderable->doctor->name, 'Doctor Department' => $this->orderable->doctor->department->name]);
        }
        if(get_class($this->orderable) == NurseAppointment::class){
            $with = array_merge($with, ['Nurse Name' => $this->orderable->nurse->name, 'Nurse Category' => $this->orderable->nurse->is_special ? "Special" : "Regular"]);
        }
        if(get_class($this->orderable) == PatientGuideAppointment::class){
            $with = array_merge($with, ['Patient Guide Name' => $this->orderable->patientGuide->name]);
        }
        if(get_class($this->orderable) == TherapistAppointment::class){
            $with = array_merge($with, ['Therapist Name' => $this->orderable->therapist->name]);
        }

        $with = array_merge($with, [
            'User Name' => $this->orderable->user->name,
            'Patient Name' => $this->orderable->patient_name ?? "N/A",
            'Phone' => $this->orderable->phone ?? $this->orderable->user->phone,
            'Sickness' => $this->orderable->sickness_details ?? "N/A",
            'Address' => $this->orderable->patient_address ?? "N/A",
            'Expected Date' => $this->orderable->expected_date ? Carbon::parse($this->orderable->expected_date)->diffForHumans() : "N/A",
        ]);

        if($this->orderable->order){
            $with = array_merge($with, [
                'Amount' => $this->orderable->order->amount,
                'Payment Status' => $this->orderable->order->status == 'Processing' ? "Paid" : "Not Paid"
            ]);
        }else{
            $with = array_merge($with, [
                'Amount' => "N/A",
                'Payment Status' => "N/A"
            ]);
        }

        return $this->to("parentscare.xyz@gmail.com")->markdown('emails.orders.admin.booked',["data" => $with]);
    }
}
