<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['password'];

    public function department(){
        return $this->belongsTo(DoctorDepartment::class, 'doctor_department_id');
    }
}
