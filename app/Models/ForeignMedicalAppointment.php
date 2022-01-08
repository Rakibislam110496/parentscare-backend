<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForeignMedicalAppointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function location(){
        return $this->belongsTo(ForeignMedicalLocation::class, 'foreign_medical_location_id');
    }
}
