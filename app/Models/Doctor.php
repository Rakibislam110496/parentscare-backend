<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['password'];

    protected $casts = [
        'dob' => 'datetime'
    ];

    protected static function boot()
    {
        parent::boot();

        static:: addGlobalScope(new ActiveScope());
    }

    public function department()
    {
        return $this->belongsTo(DoctorDepartment::class, 'doctor_department_id');
    }

    public function appointments(){
        return $this->hasMany(DoctorAppointment::class);
    }
}
