<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['password'];

    protected $casts = [
        'dob' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static :: addGlobalScope(new ActiveScope());
    }

    public function appointments(){
        return $this->hasMany(NurseAppointment::class, 'nurse_id');
    }

    public function ongoingAppointments(){
        return $this->hasMany(NurseAppointment::class, 'nurse_id')->where('status', 'ongoing');
    }

}
