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
        'phone',
        'address'
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
        return $this->hasMany(DoctorAppointment::class)->with('doctor');
    }

    public function careGiverAppointments(){
        return $this->hasMany(CareGiverAppointment::class)->with('careGiver');
    }

    public function foreignMedicalAppointments(){
        return $this->hasMany(ForeignMedicalAppointment::class);
    }

    public function homeSampleAppointments(){
        return $this->hasMany(HomeSampleAppointment::class);
    }

    public function nurseAppointments()
    {
        return $this->hasMany(NurseAppointment::class)->with('nurse');
    }

    public function patientGuideAppointments(){
        return $this->hasMany(PatientGuideAppointment::class)->with('patientGuide');
    }

    public function therapistAppointments(){
        return $this->hasMany(TherapistAppointment::class)->with('therapist');
    }

    public function globalPackageSubscriptions(){
        return $this->hasMany(GlobalPackageSubscription::class);
    }
}
