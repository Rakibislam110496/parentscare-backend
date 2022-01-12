<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NurseAppointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'expected_date' => 'datetime',
        'appointment_date' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nurse(){
        return $this->belongsTo(Nurse::class);
    }

    public function package(){
        return $this->belongsTo(NursePackage::class, 'nurse_package_id');
    }

    public function order()
    {
        return $this->morphOne(Order::class, 'orderable');
    }
}
