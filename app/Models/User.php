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
        return $this->hasMany(DoctorAppointment::class)->with(['doctor', 'order']);
    }

    public function careGiverAppointments(){
        return $this->hasMany(CareGiverAppointment::class)->with(['careGiver', 'order']);
    }

    public function foreignMedicalAppointments(){
        return $this->hasMany(ForeignMedicalAppointment::class)->with('location');
    }

    public function homeSampleAppointments(){
        return $this->hasMany(HomeSampleAppointment::class)->with('order');
    }

    public function nurseAppointments()
    {
        return $this->hasMany(NurseAppointment::class)->with(['nurse', 'order']);
    }

    public function patientGuideAppointments(){
        return $this->hasMany(PatientGuideAppointment::class)->with(['patientGuide', 'order']);
    }

    public function therapistAppointments(){
        return $this->hasMany(TherapistAppointment::class)->with(['therapist', 'order']);
    }

    public function globalPackageSubscriptions(){
        return $this->hasMany(GlobalPackageSubscription::class)->with('order');
    }
}
