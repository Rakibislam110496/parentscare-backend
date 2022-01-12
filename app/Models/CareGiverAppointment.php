<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareGiverAppointment extends Model
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

    public function careGiver()
    {
        return $this->belongsTo(CareGiver::class);
    }

    public function order(){
        return $this->morphOne(Order::class, 'orderable');
    }
}
