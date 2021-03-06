<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientGuideAppointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'expected_date' => 'datetime',
        'appointment_date' => 'datetime'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function patientGuide(){
        return $this->belongsTo(PatientGuide::class);
    }

    public function order()
    {
        return $this->morphOne(Order::class, 'orderable');
    }
}
