<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['password'];

    public function location(){
        return $this->belongsTo(TherapistLocation::class, 'therapist_location_id');
    }
}
