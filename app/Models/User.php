<?php

namespace App\Models;

use App\Traits\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Auth;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function doctorAppointments(){
        return $this->hasMany(DoctorAppointment::class);
    }

    public function careGiverAppointments(){
        return $this->hasMany(CareGiverAppointment::class);
    }

    public function foreignMedicalAppointments(){
        return $this->hasMany(ForeignMedicalAppointment::class);
    }

    public function homeSampleAppointments(){
        return $this->hasMany(HomeSampleAppointment::class);
    }

    public function nurseAppointments()
    {
        return $this->hasMany(NurseAppointment::class);
    }

    public function patientGuideAppointments(){
        return $this->hasMany(PatientGuideAppointment::class);
    }

    public function therapistAppointments(){
        return $this->hasMany(TherapistAppointment::class);
    }
}
